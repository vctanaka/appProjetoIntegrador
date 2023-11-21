<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login;
use Exception;
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

    public function getLoginFilter(Request $request)
    {
        $id = $request->id;

        $login = Login::where('id', $id)->first();

        if($login){
            return response()->json(['login'=>$login], 200);
        }else{
            return response()->json(['error' => 'Nao encontrado'], 404);
        }
    }

    public function register(Request $request)
    {
        try{
            $login = new Login();

            $login->email = $request->input('email');
            $login->password = $request->input('password');
            $login->name = $request->input('name');
            $login->save();

            if($login){

                Auth::attempt(['email' => 'admin@admin.com', 'password' => 'admin']);
                $user = Auth::user();

                $token = $user->createToken('admin')->plainTextToken;

                return response()->json(['login'=>$login,'token'=>$token], 200);
            }else{
                throw new Exception('Erro ao cadastrar');
            }

        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }




    //
}
