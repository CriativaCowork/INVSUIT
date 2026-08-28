<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceItemsEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		
        return [
            
				"invoice_id" => "filled|numeric",
				"product_id" => "nullable|numeric",
				"line_number" => "filled|numeric",
				"description" => "filled",
				"quantity" => "filled|numeric",
				"unit" => "filled|string",
				"unit_price" => "filled|numeric",
				"discount_percent" => "filled|numeric",
				"discount_value" => "filled|numeric",
				"net_total" => "filled|numeric",
				"vat_rate" => "filled|numeric",
				"vat_amount" => "filled|numeric",
				"gross_total" => "filled|numeric",
            
        ];
    }

	public function messages()
    {
        return [
			
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
