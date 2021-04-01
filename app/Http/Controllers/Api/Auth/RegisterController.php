<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    protected $redirectTo = '/remessa';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function formCadastro()
    {
        return view('auth.register');
    }

    protected function cadastro(array $data)
    {
        return User::create([
            'nome' => $data['nome'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}