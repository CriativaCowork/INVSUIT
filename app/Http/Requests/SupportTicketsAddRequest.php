<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupportTicketsAddRequest extends FormRequest
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
				"user_id" => "required|numeric",
				"conversation_id" => "nullable|numeric",
				"message_id" => "nullable|numeric",
				"assigned_to" => "nullable|numeric",
				"priority" => "required",
				"status" => "required",
				"category" => "required",
				"subject" => "required|string",
				"description" => "required",
				"resolution" => "nullable",
				"ai_analysis" => "nullable",
            
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
