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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:admins'
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
