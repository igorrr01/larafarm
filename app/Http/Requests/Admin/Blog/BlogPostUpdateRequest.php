<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostUpdateRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'required|string|max:50000',
            'photo' => 'image|max:8000'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Заголовок обовязковий',
            'description.required' => 'Опис новини обовязковий',
        ];
    }
}
