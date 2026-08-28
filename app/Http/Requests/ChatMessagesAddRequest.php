<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChatMessagesAddRequest extends FormRequest
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
            
				"conversation_id" => "required|numeric",
				"sender_type" => "required",
				"sender_id" => "nullable|numeric",
				"message" => "required",
				"attachments" => "nullable",
				"processed" => "required|numeric",
				"ai_context" => "nullable",
            
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
