<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AgtConfigs extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'agt_configs';
	

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
		'company_id','nif','name','address','city','phone','email','website','license_number','license_key','validation_url','certificate_path','public_key','private_key_encrypted','api_endpoint','webhook_url','is_active','last_validation','environment'
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
				nif LIKE ?  OR 
				name LIKE ?  OR 
				address LIKE ?  OR 
				city LIKE ?  OR 
				phone LIKE ?  OR 
				email LIKE ?  OR 
				website LIKE ?  OR 
				license_number LIKE ?  OR 
				license_key LIKE ?  OR 
				validation_url LIKE ?  OR 
				certificate_path LIKE ?  OR 
				public_key LIKE ?  OR 
				private_key_encrypted LIKE ?  OR 
				api_endpoint LIKE ?  OR 
				webhook_url LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"nif",
			"name",
			"address",
			"city",
			"phone",
			"email",
			"website",
			"license_number",
			"license_key",
			"validation_url",
			"certificate_path",
			"public_key",
			"private_key_encrypted",
			"api_endpoint",
			"webhook_url",
			"is_active",
			"last_validation",
			"environment",
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
			"nif",
			"name",
			"address",
			"city",
			"phone",
			"email",
			"website",
			"license_number",
			"license_key",
			"validation_url",
			"certificate_path",
			"public_key",
			"private_key_encrypted",
			"api_endpoint",
			"webhook_url",
			"is_active",
			"last_validation",
			"environment",
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
			"nif",
			"name",
			"address",
			"city",
			"phone",
			"email",
			"website",
			"license_number",
			"license_key",
			"validation_url",
			"certificate_path",
			"public_key",
			"private_key_encrypted",
			"api_endpoint",
			"webhook_url",
			"is_active",
			"last_validation",
			"environment",
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
			"nif",
			"name",
			"address",
			"city",
			"phone",
			"email",
			"website",
			"license_number",
			"license_key",
			"validation_url",
			"certificate_path",
			"public_key",
			"private_key_encrypted",
			"api_endpoint",
			"webhook_url",
			"is_active",
			"last_validation",
			"environment",
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
			"nif",
			"name",
			"address",
			"city",
			"phone",
			"email",
			"website",
			"license_number",
			"license_key",
			"validation_url",
			"certificate_path",
			"public_key",
			"private_key_encrypted",
			"api_endpoint",
			"webhook_url",
			"is_active",
			"last_validation",
			"environment" 
		];
	}
}
