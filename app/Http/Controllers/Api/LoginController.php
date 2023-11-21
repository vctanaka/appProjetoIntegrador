<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;
use Exception;

class LoginController extends Controller
{
    public function index()
    {
        try{
            $login = Login::all();
            return response()->json($login);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function show($id)
    {
        try{
            $login = Login::findOrFail($id);

            return response()->json($login);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function store(Request $request)
    {
        try{
            $login = new Login();

            $login->email = $request->input('email');
            $login->password = $request->input('password');
            $login->name = $request->input('name');
            $login->birth_date = $request->input('birth_date');
            $login->skin_type = $request->input('skin_type');
            $login->points = $request->input('points');

            $login->save();

            return response()->json($login);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $login = Login::find($id);

            $login->email = $request->input('email');
            $login->password = $request->input('password');
            $login->name = $request->input('name');
            $login->birth_date = $request->input('birth_date');
            $login->skin_type = $request->input('skin_type');
            $login->points = $request->input('points');

            $login->save();

            return response()->json($login);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function destroy($id)
    {
        try{
            $login = Login::find($id);

            $login->delete();

            return response()->json($login);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }
    //
}
