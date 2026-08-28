<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConversationsAddRequest;
use App\Http\Requests\ConversationsEditRequest;
use App\Models\Conversations;
use Illuminate\Http\Request;
use Exception;
class ConversationsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.conversations.list";
		$query = Conversations::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Conversations::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "conversations.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Conversations::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Conversations::query();
		$record = $query->findOrFail($rec_id, Conversations::viewFields());
		return $this->renderView("pages.conversations.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.conversations.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(ConversationsAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Conversations record
		$record = Conversations::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("conversations", "Registro adicionado com sucesso");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(ConversationsEditRequest $request, $rec_id = null){
		$query = Conversations::query();
		$record = $query->findOrFail($rec_id, Conversations::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("conversations", "Registro atualizado com sucesso");
		}
		return $this->renderView("pages.conversations.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Conversations::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Registro excluído com sucesso");
	}
}
