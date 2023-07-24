<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
            //
            'product_name' => 'required|string|max:50',
            'product_price' => 'required|numeric|min:0',
            'product_qty' => 'required|numeric|min:0|max:100',
            'product_feature' => 'required|numeric|max:1|min:0',
            'product_type' => 'required|numeric|max:20',
            'product_manufactory' => 'required|numeric|max:20',
            'product_description' => 'required|string|max:255',
            'file-input' => 'required|mimes:jpg,jpeg,png,pdf',
        ];
    }
}
