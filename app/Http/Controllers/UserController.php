<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function allusers(){
        $allusers = User::orderByDesc('id')->get();
        return view('leretec.users', ['allusers' => $allusers]);
    }

    public function create(){
        return view('leretec.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'name.required' => 'Nome é obrigatório',
            'email.required' => 'Email é obrigatório',
            'password.required' => 'Senha é obrigatória',
        ]);
        
        User::create(request(['name', 'email', 'password']));
        
        return redirect()->to('/admin/users');
    }
}
