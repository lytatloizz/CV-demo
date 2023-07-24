<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
            'user_id' => 'required|numeric|exists:users,user_id',
            'user_name' => 'required|string|max:30',
            'user_email' => 'required|string|max:100',
            'user_role' => 'required|numeric|max:2|min:1',
        ];
    }
}
