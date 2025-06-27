<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class AddOrderRequest extends FormRequest
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
            'title'    => 'required|min:5',
            'price' => 'required',
            'closing_date' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'categories' => 'required',
            'order_image_file' => 'extensions:jpg,png|mimes:jpg,png|max:10240',
            'order_archive_file' => 'extensions:zip,rar|mimes:zip,rar|max:20480'
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
            'title' => '«Название заказа»',
            'price' => '«Проходная цена»',
            'closing_date' => '«Дата сбора предложений»',
            'quantity' => '«Количество»',
            'description' => '«Описание заказа»',
            'order_image_file' => '«Чертёж заказа»',
            'categories' => '«Категории заказа»',
            'order_archive_file' => '«Архив файлов»'
        ];
    }
}
