<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:6|confirmed|unique:users,password',
            'status' => 'required'
        ];
    }

    public function messages(): array
    {

    return [

        'name.required' => __('backend/dashboard_message.Should Add Name'),
        'email.required' => __('backend/dashboard_message.Should Add Email'),
        'password.required' => __('backend/dashboard_message.Should Add Password'),
        'status.required' => __('backend/dashboard_message.Should Add Status'),

        'name.string' => __('backend/dashboard_message.Name must be string'),

        'name.unique'=> __('backend/dashboard_message.Name is already exist'),
        'email.unique'=> __('backend/dashboard_message.Email is already exist'),
        'password.unique'=> __('backend/dashboard_message.Enter Another Password'),

        'password.min'=> __('backend/dashboard_message.The password field must be at least 6 characters'),


        // 'logo'=>'must image size 2048 MB and Mimes png or jpg',
        // 'favicon'=>'must image size 2048 MB and Mimes png or jpg'
    ];

    }
}
