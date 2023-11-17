<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\RedeemedCoupons;
use App\Http\Controllers\Controller;

class RedeemedCouponsController extends Controller
{
    public function index()
    {
        try{
            $redemption = RedeemedCoupons::all();
            return response()->json($redemption);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function show($id)
    {
        try{
            $redemption = RedeemedCoupons::findOrFail($id);

            return response()->json($redemption);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function store(Request $request)
    {
        try{
            $redemption = new RedeemedCoupons();

            $redemption->user_id = $request->input('user_id');
            $redemption->coupon_id = $request->input('coupon_id');

            $redemption->save();

            return response()->json($redemption);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $redemption = RedeemedCoupons::find($id);

            $redemption->user_id = $request->input('user_id');
            $redemption->coupon_id = $request->input('coupon_id');

            $redemption->save();

            return response()->json($redemption);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function destroy($id)
    {
        try{
            $redemption = RedeemedCoupons::find($id);

            $redemption->delete();

            return response()->json('The redemption_coupon has been deleted successfully');
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }
}
