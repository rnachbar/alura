<?php

namespace App\Http\Controllers;

use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller;

class TokenController extends Controller {

    public function gerarToken(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = User::where('email', $request->email)->first();

        if (is_null($usuario) || !Hash::check($request->password, $usuario->password)) :
            return response()->json(['erro' => 'Usuário não encontrado'], 401);
        endif;

        return [
            'access_token' => JWT::encode(['email' => $request->email], env('JWT_KEY'))
        ];
    }

}
