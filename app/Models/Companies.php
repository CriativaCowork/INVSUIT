<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Companies extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'companies';
	

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
		'owner_id','name','nif','address','phone','email','city','activity_type','tax_regime','logo','mc_merchant_id','mc_merchant_key','mc_api_url','status','subscription_status','subscription_expires_at'
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
				address LIKE ?  OR 
				phone LIKE ?  OR 
				email LIKE ?  OR 
				city LIKE ?  OR 
				activity_type LIKE ?  OR 
				logo LIKE ?  OR 
				mc_merchant_id LIKE ?  OR 
				mc_merchant_key LIKE ?  OR 
				mc_api_url LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"owner_id",
			"name",
			"nif",
			"address",
			"phone",
			"email",
			"city",
			"activity_type",
			"tax_regime",
			"logo",
			"mc_merchant_id",
			"mc_merchant_key",
			"mc_api_url",
			"status",
			"subscription_status",
			"subscription_expires_at",
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
			"owner_id",
			"name",
			"nif",
			"address",
			"phone",
			"email",
			"city",
			"activity_type",
			"tax_regime",
			"logo",
			"mc_merchant_id",
			"mc_merchant_key",
			"mc_api_url",
			"status",
			"subscription_status",
			"subscription_expires_at",
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
			"owner_id",
			"name",
			"nif",
			"address",
			"phone",
			"email",
			"city",
			"activity_type",
			"tax_regime",
			"logo",
			"mc_merchant_id",
			"mc_merchant_key",
			"mc_api_url",
			"status",
			"subscription_status",
			"subscription_expires_at",
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
			"owner_id",
			"name",
			"nif",
			"address",
			"phone",
			"email",
			"city",
			"activity_type",
			"tax_regime",
			"logo",
			"mc_merchant_id",
			"mc_merchant_key",
			"mc_api_url",
			"status",
			"subscription_status",
			"subscription_expires_at",
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
			"owner_id",
			"name",
			"nif",
			"address",
			"phone",
			"email",
			"city",
			"activity_type",
			"tax_regime",
			"logo",
			"mc_merchant_id",
			"mc_merchant_key",
			"mc_api_url",
			"status",
			"subscription_status",
			"subscription_expires_at" 
		];
	}
}
