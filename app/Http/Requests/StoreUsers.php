<?php

namespace Pichai\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
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
            // TODO Attributes ans validation
            'name'=>'sometimes|required|string|max:150',
            'password' => 'sometimes|required|min:3|same:password_confirmation',
            'password_confirmation' => 'sometimes|required|min:3|same:password',
            'email' => 'sometimes|required|email|unique:users,email,:id',
            'avatar' => 'sometimes|mimes:jpeg,gif,png|size:1024'

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
