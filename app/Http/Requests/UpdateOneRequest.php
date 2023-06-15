<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOneRequest extends FormRequest
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
            'name' => [
                // 'required',
                // 'nullable|name',
                'string',
                // 'max:50',
            ],
            'email' => [
                'required',
                // 'email',
                // 'max:191',
                // 'unique:users,email',
            ],
        ];

    }
    public function messages()
    {
        return [
            //'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            // 'email.email' => 'Please enter valid email id',
        ];

    }
}
