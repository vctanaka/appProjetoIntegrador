<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Login;
use Exception;

class SkinTypeController extends Controller
{
    public function getSkinType(Request $request){
        try{
            $id = $request->id;

            $skinType = Login::where('id', $id)->first();

            return response()->json($skinType, 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }

    }

    public function upSkinType(Request $request){

        try{
            $id = $request->id;

            $skinType = Login::find($id);

            $skinType->skin_type = $request->input('skin_type');

            $skinType->save();

            return response()->json($skinType, 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

}
