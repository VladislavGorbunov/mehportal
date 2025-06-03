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
            'phone'            => 'required|min:12|max:18',
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
            'phone'            => '«Телефон»',
            'email'            => '«Email»',
            'password'         => '«Пароль»',
            'checked'          => '«Подтвердите согласие с договором-офертой и политикой обработки персональных данных»',
        ];
    }
}
