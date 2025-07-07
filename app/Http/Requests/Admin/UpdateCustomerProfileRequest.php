<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerProfileRequest extends FormRequest
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
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'active' => 'required',
        ];
    }


    /**
    * Get custom attributes for validator errors.
    *
    * @return array<string, string>
    */
    public function attributes(): array
    {
        return [
            'name' => '«Имя»',
            'lastname' => '«Фамилия»',
            'phone' => '«Телефон»',
            'email' => '«Email»',
            'active' => '«Активный»',
        ];
    }
}
