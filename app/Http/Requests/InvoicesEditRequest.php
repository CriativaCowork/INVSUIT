<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoicesEditRequest extends FormRequest
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
            
				"company_id" => "filled|numeric",
				"client_id" => "nullable|numeric",
				"invoice_number" => "filled|string",
				"series" => "filled|string",
				"sequential_number" => "filled|numeric",
				"type" => "filled",
				"status" => "filled",
				"invoice_date" => "filled|date",
				"due_date" => "nullable|date",
				"subtotal" => "filled|numeric",
				"discount_percent" => "filled|numeric",
				"discount_value" => "filled|numeric",
				"vat_amount" => "filled|numeric",
				"total" => "filled|numeric",
				"currency" => "filled|string",
				"notes" => "nullable",
				"parent_id" => "nullable|numeric",
				"pdf_path" => "nullable|string",
				"saft_hash" => "nullable|string",
				"sent_at" => "nullable|date",
            
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
