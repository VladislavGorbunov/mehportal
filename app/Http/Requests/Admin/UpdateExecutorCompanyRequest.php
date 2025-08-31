<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExecutorCompanyRequest extends FormRequest
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
            'company_id' => 'required',
            'legal_form' => 'required',
            'title' => 'required',
            'inn' => 'required|min:10|max:12',
            'region_id' => 'required',
            'contact_person' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'site' => 'min:0',
            'active' => 'required',
            'extension_number' => 'min:0|max:5',
            'address' => 'required',
            'description' => 'min:0|max:1000'
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
            'company_id' => '«ID компании»',
            'title' => '«Название»',
            'legal_form' => '«Фамилия»',
            'inn' => '«ИНН»',
            'region_id' => '«Регион»',
            'contact_person' => '«Контактное лицо»',
            'phone' => '«Телефон»',
            'Email' => '«Email»',
            'site' => '«Сайт»',
            'extension_number' => '«Добавочный номер»',
            'address' => '«Адрес»',
            'description' => '«Описание»',
        ];
    }
}
