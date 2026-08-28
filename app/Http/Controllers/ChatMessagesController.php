<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChatMessagesAddRequest;
use App\Http\Requests\ChatMessagesEditRequest;
use App\Models\ChatMessages;
use Illuminate\Http\Request;
use Exception;
class ChatMessagesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.chatmessages.list";
		$query = ChatMessages::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			ChatMessages::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "chat_messages.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, ChatMessages::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = ChatMessages::query();
		$record = $query->findOrFail($rec_id, ChatMessages::viewFields());
		return $this->renderView("pages.chatmessages.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.chatmessages.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(ChatMessagesAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("attachments", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['attachments'], "attachments");
			$modeldata['attachments'] = $fileInfo['filepath'];
		}
		
		//save ChatMessages record
		$record = ChatMessages::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("chatmessages", "Registro adicionado com sucesso");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(ChatMessagesEditRequest $request, $rec_id = null){
		$query = ChatMessages::query();
		$record = $query->findOrFail($rec_id, ChatMessages::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
		
		if( array_key_exists("attachments", $modeldata) ){
			//move uploaded file from temp directory to destination directory
			$fileInfo = $this->moveUploadedFiles($modeldata['attachments'], "attachments");
			$modeldata['attachments'] = $fileInfo['filepath'];
		}
			$record->update($modeldata);
			return $this->redirect("chatmessages", "Registro atualizado com sucesso");
		}
		return $this->renderView("pages.chatmessages.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = ChatMessages::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Registro excluído com sucesso");
	}
}
