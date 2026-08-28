<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesEditRequest extends FormRequest
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
            
				"owner_id" => "filled|numeric",
				"name" => "filled|string",
				"nif" => "nullable|string",
				"address" => "nullable|string",
				"phone" => "nullable|string",
				"email" => "nullable|email",
				"city" => "nullable|string",
				"activity_type" => "nullable|string",
				"tax_regime" => "filled",
				"logo" => "nullable|string",
				"mc_merchant_id" => "nullable|string",
				"mc_merchant_key" => "nullable|string",
				"mc_api_url" => "nullable|string",
				"status" => "filled",
				"subscription_status" => "nullable",
				"subscription_expires_at" => "nullable|date",
            
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
