<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CompletedMissions;
use App\Http\Controllers\Controller;

class CompletedMissionsController extends Controller
{
    public function index()
    {
        try{
            $completedMission = CompletedMissions::all();
            return response()->json($completedMission);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function show($id)
    {
        try{
            $completedMission = CompletedMissions::findOrFail($id);

            return response()->json($completedMission);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function store(Request $request)
    {
        try{
            $completedMission = new CompletedMissions();

            $completedMission->login_id = $request->input('login_id');
            $completedMission->mission_id = $request->input('mission_id');

            $completedMission->save();

            return response()->json($completedMission);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $completedMission = CompletedMissions::find($id);

            $completedMission->login_id = $request->input('login_id');
            $completedMission->mission_id = $request->input('mission_id');

            $completedMission->save();

            return response()->json($completedMission);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function destroy($id)
    {
        try{
            $completedMission = CompletedMissions::find($id);

            $completedMission->delete();

            return response()->json('The completed_mission has been deleted successfully');
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }



    //
}
