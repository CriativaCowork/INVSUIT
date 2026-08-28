<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceItemsAddRequest extends FormRequest
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
            
				"invoice_id" => "required|numeric",
				"product_id" => "nullable|numeric",
				"line_number" => "required|numeric",
				"description" => "required",
				"quantity" => "required|numeric",
				"unit" => "required|string",
				"unit_price" => "required|numeric",
				"discount_percent" => "required|numeric",
				"discount_value" => "required|numeric",
				"net_total" => "required|numeric",
				"vat_rate" => "required|numeric",
				"vat_amount" => "required|numeric",
				"gross_total" => "required|numeric",
            
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
