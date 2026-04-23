<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class makeLoginRequest extends FormRequest
{
    /**
     * Handle login request
     * @property-read string $email
     * @property-read string $password
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
