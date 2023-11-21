<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompletedChallenges;
use App\Models\CompletedMissions;
use App\Models\RedeemedCoupons;
use Exception;

class PointsController extends Controller
{
    public function getPoints(Request $request){

        $id = $request->id;

        $ptdChallenges = CompletedChallenges::join('challenges', 'completed_challenges.challenge_id', '=', 'challenges.id')
                                            ->where('completed_challenges.login_id', '=', $id)
                                            ->sum('challenges.value');

        $ptdMissions = CompletedMissions::join('missions', 'completed_missions.mission_id', '=', 'missions.id')
                                            ->where('completed_missions.login_id', '=', $id)
                                            ->sum('missions.value');

        $ptdCoupons = RedeemedCoupons::join('coupons', 'redeemed_coupons.coupon_id', '=', 'coupons.id')
                                            ->where('redeemed_coupons.login_id', '=', $id)
                                            ->sum('coupons.value');

        $totalPoints = $ptdChallenges + $ptdMissions - $ptdCoupons;

        return response()->json($totalPoints, 200);

        //
    }
    //
}
