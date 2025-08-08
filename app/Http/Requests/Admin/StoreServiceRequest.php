<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'title' => 'required',
            'title_case' => 'required',
            'category_id' => 'required',
            'slug' => 'required',
            'description' => 'min:0',
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
            'title' => '«Название услуги»',
            'title_case' => '«Название услуги (на какую услугу)»',
            'slug' => '«URL категории»',
            'category_id' => '«Родительская категория»',
            'description' => '«Описание услуги»',
            'active' => '«Статус услуги»'
        ];
    }
}