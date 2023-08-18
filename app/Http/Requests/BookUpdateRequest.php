<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'sometimes|required',
            'author' => 'sometimes|required',
            'subtitle' => 'sometimes|required',
            'stocks' => 'sometimes|required',
            'genre' => 'sometimes|required',
            'thumbnail' => 'sometimes|required',
        ];
    }
}
