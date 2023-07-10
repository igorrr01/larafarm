<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:100',
            'description' => 'required|string|max:500',
            'price' => 'required|integer',
            'price_type' => 'required|string|max:25',
            'market_type' => 'required|string|max:5',
            'photo' => 'image|max:8000'
        ];
    }
}
