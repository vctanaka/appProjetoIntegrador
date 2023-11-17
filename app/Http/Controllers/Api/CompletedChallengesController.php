<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CompletedChallenges;
use App\Http\Controllers\Controller;

class CompletedChallengesController extends Controller
{
    public function index()
    {
        try{
            $completedChallenge = CompletedChallenges::all();
            return response()->json($completedChallenge);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function show($id)
    {
        try{
            $completedChallenge = CompletedChallenges::findOrFail($id);

            return response()->json($completedChallenge);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function store(Request $request)
    {
        try {
            $completedChallenge = new CompletedChallenges();

            $completedChallenge->login_id = $request->input('login_id');
            $completedChallenge->challenge_id = $request->input('challenge_id');

            $completedChallenge->save();

            return response()->json($completedChallenge);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $completedChallenge = CompletedChallenges::find($id);

            $completedChallenge->login_id = $request->input('login_id');
            $completedChallenge->challenge_id = $request->input('challenge_id');

            $completedChallenge->save();

            return response()->json($completedChallenge);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function destroy($id)
    {
        try{
            $completedChallenge = CompletedChallenges::find($id);
            $completedChallenge->delete();
            return response()->json('The completed_challenge has been deleted successfully');
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }


    //
}
