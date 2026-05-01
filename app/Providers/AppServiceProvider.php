<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

/**
 * Provedor de Serviços da Aplicação
 *
 * Este provedor é responsável por inicializar e registrar serviços da aplicação.
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Registra quaisquer serviços da aplicação.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Inicializa quaisquer serviços da aplicação.
     *
     * Configura regras padrão de validação de senha com base no ambiente.
     *
     * @return void
     */
    public function boot(): void
    {   
        /*Desativa a proteção de Mass Assignment globalmente. */
        Model::unguard(true);


        Password::defaults(function () {
            $rule = Password::min(8);

            return $this->app->isProduction()
                ? $rule->mixedCase()->uncompromised()
                : $rule;
        });
    }
}
