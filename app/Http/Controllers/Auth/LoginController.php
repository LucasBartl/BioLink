<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\makeLoginRequest;
use Illuminate\Http\Request;



/* 
*Attempt to login in the system
*/

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(makeLoginRequest $request)
    {

        if ($request->attempt()) {
            return to_route('dashboard');
        }

        return back()->with(['message' => 'Erro ao buscar informações']);
    }
}
