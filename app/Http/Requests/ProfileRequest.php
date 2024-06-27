<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'bus_name' => 'required|string|max:255',
            // 'busi_img' => 'mimes:jpg,png|max:3072|required',
            "country_code" =>'required|max:4',
            'experience'=>'required',
            "phone" => 'required|numeric',
            "whatsApp_no" => 'required|numeric',
            'password' => 'required',
            'email' => 'required|email',
            'state' => 'required|string|max:255',
            'axis' => 'required|string|max:255',
            'org_desc' => 'required|string',
            'org_service' => 'required|string',
            'busi_state' => 'required|string|max:255',
            'busi_axis' => 'required|string|max:255',
            'business_cat' => 'required|string|max:255',
            'fb' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'linked_in' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
        ];
    }
}
