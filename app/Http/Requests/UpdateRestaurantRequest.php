<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class UpdateRestaurantRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string'],
            'location' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:11'],
            'logo' => ['nullable', 'string'],
            'open_at' => ['required'],
            'close_at' => ['required']
        ];
    }
}
