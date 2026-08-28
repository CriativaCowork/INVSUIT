<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentsEditRequest extends FormRequest
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
				"invoice_id" => "nullable|numeric",
				"user_id" => "filled|numeric",
				"amount" => "filled|numeric",
				"payment_method" => "filled",
				"reference" => "filled|string",
				"external_reference" => "nullable|string",
				"receipt_hash" => "nullable|string",
				"receipt_path" => "nullable|string",
				"extracted_data" => "nullable",
				"status" => "filled",
				"verified_by" => "nullable",
				"verified_by_user_id" => "nullable|numeric",
				"notes" => "nullable",
				"paid_at" => "nullable|date",
            
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
