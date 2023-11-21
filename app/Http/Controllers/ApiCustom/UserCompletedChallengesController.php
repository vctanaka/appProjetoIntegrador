<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Challenges;
use App\Models\CompletedChallenges;
use Exception;

class UserCompletedChallengesController extends Controller
{
    public function getUserCompletedChallenges(Request $request){
        try{
            $id = $request->id;

            $completedChallenges = CompletedChallenges::where('login_id', $id)->get();
            $challengeID = $completedChallenges->pluck('mission_id');

            $completed = Challenges::whereIn('id', $challengeID)->get();

            $challenges = Challenges::whereNotIn('id', $challengeID)->get();

            return response()->json([$challenges,$completed], 200);
        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }

    }

}
