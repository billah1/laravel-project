<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryUpdateRequest extends FormRequest
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
            'category_name' => 'required|string',
            // 'category_slug' => 'required|string|alpha',
            'is_active' => 'nullable',
        ];
    }
}
