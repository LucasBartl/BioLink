<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

/**
 * Solicitação de formulário para lidar com tentativas de login do usuário.
 *
 * Esta solicitação valida os campos de email e senha e fornece
 * um método para tentar autenticação no modelo User.
 *
 * @property-read string $email O endereço de email do usuário
 * @property-read string $password A senha do usuário
 */
class makeLoginRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer esta solicitação.
     *
     * @return bool Sempre retorna true para solicitações de login
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
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }

    /**
     * Tenta autenticar o usuário com as credenciais fornecidas.
     *
     * @return bool Verdadeiro se a autenticação for bem-sucedida, falso caso contrário
     */
    public function attempt():bool
    {
        if ($user = User::query()->where('email', '=', $this->email)->first()) {

            /* Comparando senha */
            if (Hash::check($this->password, $user->password)) {

                auth()->login($user);
                return true;
            }
        }
        return false;
    }
}
