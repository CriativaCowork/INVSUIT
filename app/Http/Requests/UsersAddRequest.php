<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersAddRequest extends FormRequest
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
            
				"name" => "required|string",
				"email" => "required|email",
				"phone" => "nullable|string",
				"email_verified_at" => "nullable|date",
				"password" => "required|same:confirm_password",
				"avatar" => "nullable|string",
				"role" => "required",
				"ai_credits" => "required|numeric",
				"company_id" => "nullable|numeric",
				"status" => "required",
				"remember_token" => "nullable|string",
            
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
