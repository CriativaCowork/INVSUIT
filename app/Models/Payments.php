<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Payments extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'payments';
	

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
		'company_id','invoice_id','user_id','amount','payment_method','reference','external_reference','receipt_hash','receipt_path','extracted_data','status','verified_by','verified_by_user_id','notes','paid_at'
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
				reference LIKE ?  OR 
				external_reference LIKE ?  OR 
				receipt_hash LIKE ?  OR 
				receipt_path LIKE ?  OR 
				extracted_data LIKE ?  OR 
				notes LIKE ? 
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
			"invoice_id",
			"user_id",
			"amount",
			"payment_method",
			"reference",
			"external_reference",
			"receipt_hash",
			"receipt_path",
			"extracted_data",
			"status",
			"verified_by",
			"verified_by_user_id",
			"notes",
			"paid_at",
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
			"invoice_id",
			"user_id",
			"amount",
			"payment_method",
			"reference",
			"external_reference",
			"receipt_hash",
			"receipt_path",
			"extracted_data",
			"status",
			"verified_by",
			"verified_by_user_id",
			"notes",
			"paid_at",
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
			"invoice_id",
			"user_id",
			"amount",
			"payment_method",
			"reference",
			"external_reference",
			"receipt_hash",
			"receipt_path",
			"extracted_data",
			"status",
			"verified_by",
			"verified_by_user_id",
			"notes",
			"paid_at",
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
			"invoice_id",
			"user_id",
			"amount",
			"payment_method",
			"reference",
			"external_reference",
			"receipt_hash",
			"receipt_path",
			"extracted_data",
			"status",
			"verified_by",
			"verified_by_user_id",
			"notes",
			"paid_at",
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
			"invoice_id",
			"user_id",
			"amount",
			"payment_method",
			"reference",
			"external_reference",
			"receipt_hash",
			"receipt_path",
			"extracted_data",
			"status",
			"verified_by",
			"verified_by_user_id",
			"notes",
			"paid_at" 
		];
	}
}
