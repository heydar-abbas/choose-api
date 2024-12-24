<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'restaurant_id' => ['required', 'exists:restaurants,id'],
            'user_id' => ['required', 'exists:users,id'],
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:255'],
            'price' => ['required', 'integer'],
            'image' => ['string', 'nullable'],
        ];
    }

    // public function attributes()
    // {
    //   return [
    //     'restaurant_id' => 'restaurant',
    //     'user_id' => 'user',
    //     'category_id' => 'category',
    //     'title' => 'title',
    //     'desc' => 'description',
    //     'price' => 'price',
    //     'image' => 'image',
    //   ];
    // }
}
