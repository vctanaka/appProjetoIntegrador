<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Exception;


class RecoveryPasswordController extends Controller
{

    public function sendEmail(Request $request){

        $email = $request->email;

        $recovery = Login::where('email', $email)->first();

        if($recovery){
            $recovery->recovery_code = rand(100000, 999999);
            $recovery->recovery_time = date('Y-m-d H:i:s');

            $recovery->save();

            return response()->json(['recovery'=>$recovery], 200);
        } else {
            return response()->json(['error' => 'Email Nao corresponde a um email cadastrado'], 404);
        }

    }

    public function recoveryCode(Request $request)
    {
        $code = $request->recovery_code;

        $recovery = Login::where('recovery_code', $code)->first();

        if($recovery){

            return response()->json(['recovery'=>$recovery], 200);
        } else {
            return response()->json(['error' => 'Codigo Incorreto'], 404);
        }

    }

    public function newPassword(Request $request){

        $password = $request->password;
        $samePassword = $request->samePassword;
        $code = $request->recovery_code;

        if($password == $samePassword){
            $recovery = Login::where('recovery_code', $code)->where('recovery_time', '>=', date('Y-m-d H:i:s', strtotime('-5 minutes')))->first();
            if($recovery){
                $recovery->password = $password;

                $recovery->save();

                return response()->json(['recovery'=>$recovery], 200);
            } else {
                return response()->json(['error' => 'Codigo Expirado'], 500);
            }
        }else{
            return response()->json(['error' => 'Senhas nao correspondem'], 404);
        }

    }

    //
}
