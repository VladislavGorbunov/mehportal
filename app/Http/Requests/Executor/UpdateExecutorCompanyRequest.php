<?php

namespace App\Http\Requests\Executor;

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
            'legal_form' => 'required',
            'title' => 'required',
            'inn' => 'required|min:10',
            'region_id' => 'required|min:1|max:2',
            'address' => 'required|min:10',
            'contact_person' => 'required',
            'phone' => 'required',
            'site' => 'min:0',
            'extension_number' => 'required',
            'email' => 'required|email',
            'description' => 'required|min:50',
            'categories' => 'required',
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
            'сайт' => '«Сайт»',
            'extension_number' => '«Добавочный номер»',
            'email' => '«Email»',
            'description' => '«Описание организации»',
            'categories' => '«Категории услуг»'
        ];
    }
}
