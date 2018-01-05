<?php

namespace Pichai\Http\Requests;

use GuzzleHttp\Psr7\Request;
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
            'name'=>'required|string|max:150',
            'password' => 'required|min:3|same:password_confirmation',
            'password_confirmation' => 'required|min:3|same:password',
            'email' => 'required|email|unique:users,email'/*.$this->id*/,
            'avatar' => 'mimes:jpeg,gif,png|size:1024',
            'phone'=>'required|min:8',
            'gender'=>'required'
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
