<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(! preg_match('/^@[a-zA-Z0-9_-]+$/',$value)){
            $fail("Precisa iniciar com um @ e só pode usar _ - letras e números sem espaços ");
        }

    }
}
