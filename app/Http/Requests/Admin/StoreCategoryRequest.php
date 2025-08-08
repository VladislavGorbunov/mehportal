<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'title' => '«Название категории»',
            'title_case' => '«Название категории (на какую услугу)»',
            'slug' => '«URL категории»',
            'description' => '«Описание категории»',
            'active' => '«Статус категории»'
        ];
    }
}
