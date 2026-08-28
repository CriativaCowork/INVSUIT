<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicensesAddRequest extends FormRequest
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
				"license_key" => "nullable|string",
				"license_type" => "required",
				"agt_nif" => "nullable|string",
				"agt_name" => "nullable|string",
				"agt_address" => "nullable",
				"agt_phone" => "nullable|string",
				"agt_email" => "nullable|email",
				"certificate_number" => "nullable|string",
				"validation_url" => "nullable|string",
				"issue_date" => "nullable|date",
				"expiry_date" => "nullable|date",
				"status" => "required",
				"is_active" => "required|numeric",
				"test_mode" => "required|numeric",
				"test_mode_until" => "nullable|date",
            
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
