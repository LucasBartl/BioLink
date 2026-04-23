<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\makeRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function register(makeRegisterRequest $request){
        if($request->trytoRegister()){
            return to_route('dashboard');
        }

        return back(['message' => 'Erro ao registrar usuário' ]);
    }

    


}
