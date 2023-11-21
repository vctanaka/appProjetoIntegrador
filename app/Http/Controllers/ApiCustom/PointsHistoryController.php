<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompletedChallenges;
use App\Models\CompletedMissions;
use App\Models\RedeemedCoupons;
use Exception;

class PointsHistoryController extends Controller
{
    public function getHistory(Request $request){

        $id = $request->id;

        $coupons = RedeemedCoupons::where('login_id', $id)
                                    ->join('coupons', 'redeemed_coupons.coupon_id', '=', 'coupons.id')
                                    ->selectRaw("'coupon' as description, coupons.value as point, '-' as op, redeemed_coupons.created_at as date_order");
        $challenges = CompletedChallenges::where('login_id', $id)
                                        ->join('challenges', 'completed_challenges.challenge_id', '=', 'challenges.id')
                                        ->selectRaw("challenges.name as description, challenges.value as point, '+' as op, completed_challenges.created_at as date_order");
        $missions = CompletedMissions::where('login_id', $id)
                                        ->join('missions', 'completed_missions.mission_id', '=', 'missions.id')
                                        ->selectRaw("missions.name as description, missions.value as point, '+' as op, completed_missions.created_at as date_order");

        $union = $coupons->union($challenges)->union($missions)->orderby('date_order', 'desc')->get();

        return response()->json($union, 200);

    }
}
