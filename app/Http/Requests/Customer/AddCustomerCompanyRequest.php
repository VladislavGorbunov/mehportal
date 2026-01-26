<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomerCompanyRequest extends FormRequest
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
            'legal_form' => 'required',
            'title' => 'required',
            'inn' => 'required|min:10',
            'region_id' => 'required|min:1|max:2',
            'address' => 'required|min:10',
            'contact_person' => 'required',
            'phone' => 'required',
            'extension_number' => 'min:0|max:5',
            'email' => 'required|email',
            'description' => '',
            'customer_id' => '',
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
            'legal_form' => '«Организационно-правовая форма»',
            'title' => '«Название организации»',
            'inn' => '«ИНН»',
            'region_id' => '«Регион»',
            'address' => '«Адрес»',
            'contact_person' => '«Контактное лицо»',
            'phone' => '«Телефон»',
            'extension_number' => '«Добавочный номер»',
            'email' => '«Email»',
            'description' => '«Описание организации»',
        ];
    }
}
