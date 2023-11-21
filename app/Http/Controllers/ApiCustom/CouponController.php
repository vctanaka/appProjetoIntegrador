<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coupons;
use App\Models\RedeemedCoupons;
use Exception;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    public function getCoupon(Request $request){

        try{
            $id = $request->id;

            $coupons = Coupons::leftJoin('redeemed_coupons', function($join) use ($id){
                                        $join->on('coupons.id', '=', 'redeemed_coupons.coupon_id')
                                            ->on('redeemed_coupons.login_id', '=', DB::raw("$id"));
                                    })
                                    ->selectRaw('coupons.*, redeemed_coupons.login_id, redeemed_coupons.coupon_id')
                                    ->get();

            return response()->json($coupons, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
        //
    }


    public function setCoupon(Request $request){

        try{
            $id = $request->id;

            $coupons = Coupons::leftJoin('redeemed_coupons', function($join) use ($id){
                                        $join->on('coupons.id', '=', 'redeemed_coupons.coupon_id')
                                            ->on('redeemed_coupons.login_id', '=', DB::raw("$id"));
                                    })
                                    ->selectRaw('coupons.*, redeemed_coupons.login_id, redeemed_coupons.coupon_id')
                                    ->get();

            return response()->json($coupons, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }
        //
    }
    //
}
