<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOneRequest extends FormRequest
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
                'required',
                'string',
                'nullable:ones,name',
                'max:50',
            ],
            'email' => [
                'required',
                'email',
                'max:191',
                'unique:ones,email',
            ],
        ];


    }

    public function messages()
    {
        return [
            // 'name.required' => 'Name is required',
            'email.required' => 'Email is required',
        ];

    }
}
