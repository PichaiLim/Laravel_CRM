<?php

namespace Pichai\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdmins extends FormRequest
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
            'name' => 'required|string',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
            'email' => 'required|email|unique:admins,email',
            'roles' => 'required|integer|min:1'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'password' => 'A password is required',
            'email.required' => 'A email is required',
        ];
    }
}
