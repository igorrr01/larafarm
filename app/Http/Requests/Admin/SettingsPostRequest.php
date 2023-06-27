<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingsPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'phone' => 'required|integer',
            'email' => 'required|string|max:255',
            'slider_1_text' => 'required|string|max:250',
            'slider_2_text' => 'required|string|max:250',
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Номер телефону не заповнений',
            'phone.integer' => 'Номер телефону тільки в числовому форматі',
            'email.required' => 'Поштова скринька не заповнена',
            'slider_1_text.required' => 'Текст 1 слайдеру не заповнений',
            'slider_2_text.required' => 'Текст 2 слайдеру не заповнений',
            'slider_1_text.max' => 'Маскимальна довжина тексту 1 слайдеру 250 символів',
            'slider_2_text.max' => 'Маскимальна довжина тексту 2 слайдеру 250 символів',
        ];
    }
}
