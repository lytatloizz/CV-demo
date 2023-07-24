<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartsRequest extends FormRequest
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
            'product_img' => 'required|string',
            'product_qty' => 'required|numeric|min:0|max:100',
        ];
    }
}
