<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Licenses extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'licenses';
	

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
		'company_id','license_key','license_type','agt_nif','agt_name','agt_address','agt_phone','agt_email','certificate_number','validation_url','issue_date','expiry_date','status','is_active','test_mode','test_mode_until'
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
				license_key LIKE ?  OR 
				agt_nif LIKE ?  OR 
				agt_name LIKE ?  OR 
				agt_address LIKE ?  OR 
				agt_phone LIKE ?  OR 
				agt_email LIKE ?  OR 
				certificate_number LIKE ?  OR 
				validation_url LIKE ? 
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
			"license_key",
			"license_type",
			"agt_nif",
			"agt_name",
			"agt_address",
			"agt_phone",
			"agt_email",
			"certificate_number",
			"validation_url",
			"issue_date",
			"expiry_date",
			"status",
			"is_active",
			"test_mode",
			"test_mode_until",
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
			"license_key",
			"license_type",
			"agt_nif",
			"agt_name",
			"agt_address",
			"agt_phone",
			"agt_email",
			"certificate_number",
			"validation_url",
			"issue_date",
			"expiry_date",
			"status",
			"is_active",
			"test_mode",
			"test_mode_until",
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
			"license_key",
			"license_type",
			"agt_nif",
			"agt_name",
			"agt_address",
			"agt_phone",
			"agt_email",
			"certificate_number",
			"validation_url",
			"issue_date",
			"expiry_date",
			"status",
			"is_active",
			"test_mode",
			"test_mode_until",
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
			"license_key",
			"license_type",
			"agt_nif",
			"agt_name",
			"agt_address",
			"agt_phone",
			"agt_email",
			"certificate_number",
			"validation_url",
			"issue_date",
			"expiry_date",
			"status",
			"is_active",
			"test_mode",
			"test_mode_until",
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
			"license_key",
			"license_type",
			"agt_nif",
			"agt_name",
			"agt_address",
			"agt_phone",
			"agt_email",
			"certificate_number",
			"validation_url",
			"issue_date",
			"expiry_date",
			"status",
			"is_active",
			"test_mode",
			"test_mode_until" 
		];
	}
}
