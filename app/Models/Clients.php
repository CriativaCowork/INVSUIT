<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Clients extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'clients';
	

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
		'company_id','name','nif','email','phone','address','city','country','vat_exempt','credit_limit','notes','status'
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
				name LIKE ?  OR 
				nif LIKE ?  OR 
				email LIKE ?  OR 
				phone LIKE ?  OR 
				address LIKE ?  OR 
				city LIKE ?  OR 
				country LIKE ?  OR 
				notes LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"name",
			"nif",
			"email",
			"phone",
			"address",
			"city",
			"country",
			"vat_exempt",
			"credit_limit",
			"notes",
			"status",
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
			"name",
			"nif",
			"email",
			"phone",
			"address",
			"city",
			"country",
			"vat_exempt",
			"credit_limit",
			"notes",
			"status",
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
			"name",
			"nif",
			"email",
			"phone",
			"address",
			"city",
			"country",
			"vat_exempt",
			"credit_limit",
			"notes",
			"status",
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
			"name",
			"nif",
			"email",
			"phone",
			"address",
			"city",
			"country",
			"vat_exempt",
			"credit_limit",
			"notes",
			"status",
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
			"name",
			"nif",
			"email",
			"phone",
			"address",
			"city",
			"country",
			"vat_exempt",
			"credit_limit",
			"notes",
			"status" 
		];
	}
}
