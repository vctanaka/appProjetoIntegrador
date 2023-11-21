<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Coupons;
use App\Http\Controllers\Controller;
use Exception;

class CouponsController extends Controller
{
    public function index()
    {
        try{
            $coupons = Coupons::all();
            return response()->json($coupons);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function show($id)
    {
        try{
            $coupons = Coupons::findOrFail($id);

            return response()->json($coupons);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function store(Request $request)
    {
        try{
            $coupons = new Coupons();

            $coupons->store = $request->input('store');
            $coupons->code = $request->input('code');
            $coupons->link = $request->input('link');
            $coupons->value = $request->input('value');
            $coupons->expiration_date = $request->input('expiration_date');

            $coupons->save();

            return response()->json($coupons);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $coupons = Coupons::find($id);

            $coupons->store = $request->input('store');
            $coupons->code = $request->input('code');
            $coupons->link = $request->input('link');
            $coupons->value = $request->input('value');
            $coupons->expiration_date = $request->input('expiration_date');

            $coupons->save();

            return response()->json($coupons);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    public function destroy($id)
    {
        try{
            $coupons = Coupons::find($id);

            $coupons->delete();

            return response()->json($coupons);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
    }

    //
}
