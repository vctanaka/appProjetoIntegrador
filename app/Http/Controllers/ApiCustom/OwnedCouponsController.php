<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coupons;
use App\Models\RedeemedCoupons;
use Exception;

class OwnedCouponsController extends Controller
{
    public function getCouponNew(Request $request){
        try{
            $id = $request->id;

            $subQuery = RedeemedCoupons::select('coupon_id')->where('login_id', $id);

            $coupons = Coupons::whereNotIn('id',$subQuery)->get();

            return response()->json($coupons, 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }

    }

    public function getCouponsOld(Request $request){
        try{
            $id = $request->id;

            $coupons = RedeemedCoupons::where('login_id', $id)->join('coupons', 'redeemed_coupons.coupon_id', '=', 'coupons.id')->get();

            return response()->json($coupons, 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }

    }

    public function getCouponsValue(Request $request){
        try{
            $id = $request->id;

            $coupons = Coupons::where('id', $id)->first();

            return response()->json($coupons, 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }

    }

}
