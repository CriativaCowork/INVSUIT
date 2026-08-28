<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsAddRequest extends FormRequest
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
				"code" => "required|string",
				"name" => "required|string",
				"description" => "nullable",
				"category" => "nullable|string",
				"price" => "required|numeric",
				"cost" => "nullable|numeric",
				"stock" => "required|numeric",
				"unit" => "required|string",
				"vat_rate" => "required|numeric",
				"barcode" => "nullable|string",
				"is_active" => "required|numeric",
            
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
