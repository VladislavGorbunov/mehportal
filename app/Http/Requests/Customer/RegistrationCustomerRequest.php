<?php
namespace App\Http\Requests\Customer;

use App\Http\Requests\Customer\RegistrationCustomerRequest;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationCustomerRequest extends FormRequest
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
            'name'             => 'required|min:3|max:15',
            'lastname'         => 'required|min:3|max:15',
            'company'          => 'required|min:3|max:20',
            'legal_form'       => 'required|min:2|max:3',
            'inn'              => 'required|min:10|max:15',
            'region_id'        => 'required|min:1|max:3',
            'adress'           => 'required|min:5',
            'contact_person'   => 'required|min:3|max:40',
            'phone'            => 'required|min:12|max:15',
            'extension_number' => 'required|min:3|max:6',
            'email'            => 'required|email|unique:customers,email',
            'password'         => 'required|min:8',
            'checked'          => 'required',
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
            'name'             => '«Имя»',
            'lastname'         => '«Фамилия»',
            'company'          => '«Название компании»',
            'legal_form'       => '«Правовая форма»',
            'inn'              => '«ИНН»',
            'region_id'        => '«Регион»',
            'adress'           => '«Адрес»',
            'contact_person'   => '«Контактное лицо»',
            'phone'            => '«Телефон»',
            'extension_number' => '«Добавочный номер»',
            'email'            => '«Email»',
            'password'         => '«Пароль»',
            'checked'         => '«Подтвердите согласие с договором-офертой и политикой обработки персональных данных»',
        ];
    }
}
