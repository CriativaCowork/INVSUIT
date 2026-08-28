<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Invoices extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'invoices';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'company_id','client_id','invoice_number','series','sequential_number','type','status','invoice_date','due_date','subtotal','discount_percent','discount_value','vat_amount','total','currency','notes','parent_id','pdf_path','saft_hash','sent_at'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				id LIKE ?  OR 
				invoice_number LIKE ?  OR 
				series LIKE ?  OR 
				currency LIKE ?  OR 
				notes LIKE ?  OR 
				pdf_path LIKE ?  OR 
				saft_hash LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"id",
			"company_id",
			"client_id",
			"invoice_number",
			"series",
			"sequential_number",
			"type",
			"status",
			"invoice_date",
			"due_date",
			"subtotal",
			"discount_percent",
			"discount_value",
			"vat_amount",
			"total",
			"currency",
			"notes",
			"parent_id",
			"pdf_path",
			"saft_hash",
			"sent_at",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"company_id",
			"client_id",
			"invoice_number",
			"series",
			"sequential_number",
			"type",
			"status",
			"invoice_date",
			"due_date",
			"subtotal",
			"discount_percent",
			"discount_value",
			"vat_amount",
			"total",
			"currency",
			"notes",
			"parent_id",
			"pdf_path",
			"saft_hash",
			"sent_at",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"company_id",
			"client_id",
			"invoice_number",
			"series",
			"sequential_number",
			"type",
			"status",
			"invoice_date",
			"due_date",
			"subtotal",
			"discount_percent",
			"discount_value",
			"vat_amount",
			"total",
			"currency",
			"notes",
			"parent_id",
			"pdf_path",
			"saft_hash",
			"sent_at",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"company_id",
			"client_id",
			"invoice_number",
			"series",
			"sequential_number",
			"type",
			"status",
			"invoice_date",
			"due_date",
			"subtotal",
			"discount_percent",
			"discount_value",
			"vat_amount",
			"total",
			"currency",
			"notes",
			"parent_id",
			"pdf_path",
			"saft_hash",
			"sent_at",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"company_id",
			"client_id",
			"invoice_number",
			"series",
			"sequential_number",
			"type",
			"status",
			"invoice_date",
			"due_date",
			"subtotal",
			"discount_percent",
			"discount_value",
			"vat_amount",
			"total",
			"currency",
			"notes",
			"parent_id",
			"pdf_path",
			"saft_hash",
			"sent_at" 
		];
	}
}
