<?php

namespace App\Http\Controllers\ApiCustom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompletedMissions;
use App\Models\Missions;
use Illuminate\Support\Facades\DB;
use Exception;

class WeekMissionsController extends Controller
{
    public function getWeekMissions(Request $request){
        try{
            $id = $request->id;

            $missionDay = Missions::where('day', date('Y-m-d'))->first();

            if(!$missionDay){
                $randomMission = Missions::inRandomOrder()->limit(7)->get();

                foreach ($randomMission as $key => $value) {
                    $upMission = Missions::find($value["id"]);
                    $upMission->day = date('Y-m-d');
                    $upMission->save();
                }

            }

            $randomMission = Missions::leftJoin('completed_missions', function($join) use ($id){
                                            $join->on('missions.id', '=', 'completed_missions.mission_id')
                                                ->on('completed_missions.login_id', '=', DB::raw("$id"));
                                        })
                                        ->selectRaw('missions.*, completed_missions.login_id, completed_missions.mission_id, completed_missions.created_at as completed')
                                        ->where('day', date('Y-m-d'))
                                        ->get();


            return response()->json($randomMission, 200);

        }
        catch (Exception $e) {
            return response()->json($e->getMessage(),500);
        }

    }

}
