<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildingMaterialRequest extends FormRequest
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
            'address'=>'required|string|max:255',
            'title'=>'required|string|max:255',
            // 'category'=>'required|string',
            'type'=>'required|string',
            'title'=>'required|string|max:255',
            'price'=>'required|numeric',
            'quantity'=>'required',
            // 'installment'=>'required|string',
            'description'=>'required|string',
            // 'thumbnail'=>'required|string',
            'thumbnail' => 'required|mimes:jpg,png|max:3072|required',
        ];
    }
}
