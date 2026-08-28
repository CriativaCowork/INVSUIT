<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class InvoiceItems extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'invoice_items';
	

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
		'invoice_id','product_id','line_number','description','quantity','unit','unit_price','discount_percent','discount_value','net_total','vat_rate','vat_amount','gross_total'
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
				description LIKE ?  OR 
				unit LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
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
			"invoice_id",
			"product_id",
			"line_number",
			"description",
			"quantity",
			"unit",
			"unit_price",
			"discount_percent",
			"discount_value",
			"net_total",
			"vat_rate",
			"vat_amount",
			"gross_total",
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
			"invoice_id",
			"product_id",
			"line_number",
			"description",
			"quantity",
			"unit",
			"unit_price",
			"discount_percent",
			"discount_value",
			"net_total",
			"vat_rate",
			"vat_amount",
			"gross_total",
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
			"invoice_id",
			"product_id",
			"line_number",
			"description",
			"quantity",
			"unit",
			"unit_price",
			"discount_percent",
			"discount_value",
			"net_total",
			"vat_rate",
			"vat_amount",
			"gross_total",
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
			"invoice_id",
			"product_id",
			"line_number",
			"description",
			"quantity",
			"unit",
			"unit_price",
			"discount_percent",
			"discount_value",
			"net_total",
			"vat_rate",
			"vat_amount",
			"gross_total",
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
			"invoice_id",
			"product_id",
			"line_number",
			"description",
			"quantity",
			"unit",
			"unit_price",
			"discount_percent",
			"discount_value",
			"net_total",
			"vat_rate",
			"vat_amount",
			"gross_total" 
		];
	}
}
