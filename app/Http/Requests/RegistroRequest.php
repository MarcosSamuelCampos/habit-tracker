<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class RegistroRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:60|confirmed',
        ];
    }
    #[Override]
    public function messages():array
    {
        return[
           'name.required' => 'O campo é obrigatório',
           'name.max' => 'Atingiu o limite de caracteres',
           'name.string' => 'Deve ser uma texto valido',
           
           'email.required' => 'O campo e-mail é obrigatório',
           'email.email' => 'o Campo e-mail deve ser válido',
           'email.unique' => 'Este e-mail já existe',

            'password.required' => 'Campo senha é obrigatório!',
            'password.min' => 'A senha deve conter no mínimo 6 caracteres',
            'password.max' => 'A senha deve conter no máximo 60 caracteres',
            'password.confirmed' => 'As senhas não são iguais!',
        ];
    }
}
