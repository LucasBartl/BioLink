<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Validation\Rules\Password;

class makeRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define as regras de validação para a requisição de registro.
     *
     * Este método retorna um array com as regras de validação aplicadas aos campos
     * enviados na requisição de criação de conta. As regras incluem:
     * - 'name': obrigatório e deve ser uma string.
     * - 'email': obrigatório, deve ser um e-mail válido e confirmado.
     * - 'password': obrigatório.
     *@property-read string $name 
     *@property-read string $email
     *@property-read string $password 
     * @return array<string Regras de validação para os campos da requisição.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'confirmed', 'unique:users'],
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ]

        ];
    }

    public function trytoRegister()
    {

        /* 
        $user = new User();
        $user->name = $this->name;
        $user->password = $this->password;
        $user->email = $this->email;
        $user->save(); */

        //Realiza todo o processo acima e já valida em poucas linhas 
        $user = User::query()->create($this->validated());

        //Logar com o usuário criado 
        auth()->login($user);

        return true;
    }
}
