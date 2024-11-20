<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoryCreateRequest extends ApiRequest
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
            'content' => 'required|text',
            'read_time' => 'required|integer|min:1',
            'confirmation' => 'required|boolean',
            'name' => 'required|string|min:1|max:64',
            'description' => 'required|text',
            'photo' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [

        ];
    }
}

