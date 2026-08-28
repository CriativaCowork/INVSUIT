<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgtConfigsEditRequest extends FormRequest
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
				"nif" => "nullable|string",
				"name" => "nullable|string",
				"address" => "nullable",
				"city" => "nullable|string",
				"phone" => "nullable|string",
				"email" => "nullable|email",
				"website" => "nullable|string",
				"license_number" => "nullable|string",
				"license_key" => "nullable|string",
				"validation_url" => "nullable|string",
				"certificate_path" => "nullable|string",
				"public_key" => "nullable",
				"private_key_encrypted" => "nullable",
				"api_endpoint" => "nullable|string",
				"webhook_url" => "nullable|string",
				"is_active" => "filled|numeric",
				"last_validation" => "nullable|date",
				"environment" => "filled",
            
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
