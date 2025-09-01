<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendCpRequest extends FormRequest
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
            'company_name' => 'required',
            'company_inn' => 'required',
            'company_region' => 'required',
            'contact_person' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required',
            'customer_id' => 'required',
            'order_id' => 'required',
            'cp_text' => 'required',
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
            'company_name'   => '«Название компании»',
            'company_inn'    => '«ИНН компании»',
            'company_region' => '«Регион компании»',
            'contact_person' => '«Контактное лицо»',
            'contact_phone'  => '«Телефон»',
            'contact_email'  => '«Email»',
            'cp_text'        => '«Текст коммерческого предложения»',
        ];
    }
}
