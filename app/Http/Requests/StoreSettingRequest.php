<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
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
            // $this->id; check if name of arbic or english Repeated (مكرر) or no
            'ar_title' =>'required|unique:blog_settings,title->ar'.$this->id,
            'en_title' =>'required|unique:blog_settings,title->en'.$this->id,

            'ar_content' =>'required|unique:blog_settings,content->ar'.$this->id,
            'en_content' =>'required|unique:blog_settings,content->en'.$this->id,

            'ar_description' =>'required|unique:blog_settings,description->ar'.$this->id,
            'en_description' =>'required|unique:blog_settings,description->en'.$this->id,

            // 'logo'=>'nullable|image|mimes:png,jpg|max:2048'.$this->id,
            // 'favicon'=>'nullable|image|mimes:png,jpg|max:2048'.$this->id

        ];
    }

    public function messages(): array
    {
    return [
        'ar_title.required' => 'A arabic title is required',
        'en_title.required' => 'A english title is required',

        'ar_content.required' => 'A arabic content is required',
        'en_content.required' => 'A english message is required',

        'ar_description.required' => 'A arabic description is required',
        'en_description.required' => 'A english description is required',

        // 'logo'=>'must image size 2048 MB and Mimes png or jpg',
        // 'favicon'=>'must image size 2048 MB and Mimes png or jpg'
    ];
    }
}
