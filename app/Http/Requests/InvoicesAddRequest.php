<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoicesAddRequest extends FormRequest
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
            
				"company_id" => "required|numeric",
				"client_id" => "nullable|numeric",
				"invoice_number" => "required|string",
				"series" => "required|string",
				"sequential_number" => "required|numeric",
				"type" => "required",
				"status" => "required",
				"invoice_date" => "required|date",
				"due_date" => "nullable|date",
				"subtotal" => "required|numeric",
				"discount_percent" => "required|numeric",
				"discount_value" => "required|numeric",
				"vat_amount" => "required|numeric",
				"total" => "required|numeric",
				"currency" => "required|string",
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
