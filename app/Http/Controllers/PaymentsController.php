<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentsAddRequest;
use App\Http\Requests\PaymentsEditRequest;
use App\Models\Payments;
use Illuminate\Http\Request;
use Exception;
class PaymentsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.payments.list";
		$query = Payments::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Payments::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "payments.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Payments::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Payments::query();
		$record = $query->findOrFail($rec_id, Payments::viewFields());
		return $this->renderView("pages.payments.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.payments.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(PaymentsAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Payments record
		$record = Payments::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("payments", "Registro adicionado com sucesso");
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(PaymentsEditRequest $request, $rec_id = null){
		$query = Payments::query();
		$record = $query->findOrFail($rec_id, Payments::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("payments", "Registro atualizado com sucesso");
		}
		return $this->renderView("pages.payments.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Payments::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, "Registro excluído com sucesso");
	}
}
