<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('username', $request->username)->first();
        if(!$user) return response('', 404);
        if(!password_verify($request->password, $user->password)) return response('', 401);
        $payload = [
            'sub' => $user->id, //Sujeto del token (usuario)
            'iat' => time(),
            'exp' => time() + 60*60*24*30 //(el token expira en un mes)
        ];
        //Generar el token
        $jwt = JWT::encode($payload, env('JWT_SECRET'), 'HS256');
        return $jwt;
    }
}
