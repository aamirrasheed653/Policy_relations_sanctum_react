<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'sometimes|required',
            'publish_date' => 'sometimes|required|date',
            'author' => 'sometimes|required',
            'isbn' => 'sometimes|required|string|unique:books,isbn' . $this->book->id,
            'description' => 'sometimes|required|string|max:255'
        ];
    }
}
