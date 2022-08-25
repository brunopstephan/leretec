<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request){
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email é obrigatório',
            'password.required' => 'Senha é obrigatória',
        ]);


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/admin');
        }else{
            return redirect()->back()->with('danger', 'E-mail ou senha inválidos');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
