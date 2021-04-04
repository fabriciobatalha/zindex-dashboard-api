<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $verificarEmail = User::where('email', '=', $request->email)->first();

        if ($verificarEmail) {
            return response()->json(['message' => 'E-mail já cadastrado!'], 422);
        }

        return User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->senha),
            'cep' => $request->cep,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado
        ]);
    }
}
