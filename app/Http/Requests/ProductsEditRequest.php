<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsEditRequest extends FormRequest
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
				"code" => "filled|string",
				"name" => "filled|string",
				"description" => "nullable",
				"category" => "nullable|string",
				"price" => "filled|numeric",
				"cost" => "nullable|numeric",
				"stock" => "filled|numeric",
				"unit" => "filled|string",
				"vat_rate" => "filled|numeric",
				"barcode" => "nullable|string",
				"is_active" => "filled|numeric",
            
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
