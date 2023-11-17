<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;


class AuthenticatorLoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $login = Login::where('email', $email)->where('password', $password)->first();

        if($login){
            Auth::attempt(['email' => 'admin@admin.com', 'password' => 'admin']);
            $user = Auth::user();

            $token = $user->createToken('admin')->plainTextToken;

            return response()->json(['login'=>$login,'token'=>$token], 200);
        }else{
            return response()->json(['error' => 'Nao encontrado'], 404);
        }
    }

    //
}
