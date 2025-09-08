<?php

namespace App\Http\Requests\Executor;

use Illuminate\Foundation\Http\FormRequest;

class AddExecutorCompanyRequest extends FormRequest
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
            'inn' => 'required|min:10|max:12',
            'region_id' => 'required|min:1|max:3',
            'address' => 'required|min:10',
            'contact_person' => 'required',
            'phone' => 'required',
            'site' => 'min:0',
            'extension_number' => 'min:0|max:5',
            'email' => 'required|email',
            'description' => 'required|min:50',
            'categories' => 'required',
            'logo' => 'extensions:jpg,png|mimes:jpg,png|max:10240',
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
            'site' => '«Сайт»',
            'extension_number' => '«Добавочный номер»',
            'email' => '«Email»',
            'description' => '«Описание организации»',
            'categories' => '«Категории услуг»',
            'logo' => '«Логотип компании»'
            
        ];
    }
}
