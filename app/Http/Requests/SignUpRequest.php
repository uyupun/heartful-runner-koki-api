<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SignupRequest extends FormRequest
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
            'user_id' => 'required|string|max:16|unique:users,user_id',
            'password' => 'required|string|min:8|max:255',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $res = response()->json(
            [
                'error_message' => $validator->errors(),
            ],
            400
        );
        throw new HttpResponseException($res);
    }
}
