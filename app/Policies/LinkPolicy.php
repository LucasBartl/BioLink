<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    /* Sempre é necessario definir o usuário em primeiro paramentro quando se trata de polices */
    public function update(User $user, Link $link)
    {
        /* Leitura:
            return quando o usuário autenticado e do link for o mesmo 
            o mesmo que :  return $link->user->id == $user->id;
        */
        return $link->user->is($user)
            ? Response::allow()
            : Response::deny('Esse link não pertence a seu usuário');
    }
    public function destroy(User $user, Link $link){

        

    }
}
