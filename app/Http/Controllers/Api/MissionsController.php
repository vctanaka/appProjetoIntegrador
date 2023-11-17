<?php

namespace App\Http\Controllers\Api;

use App\Models\Missions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MissionsController extends Controller
{
    public function index()
    {
        try{
            $missions = Missions::all();
            return response()->json($missions);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function show($id)
    {
        try{
            $missions = Missions::findOrFail($id);

            return response()->json($missions);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function store(Request $request)
    {
        try{
            $missions = new Missions();

            $missions->name = $request->input('name');
            $missions->description = $request->input('description');
            $missions->file = $request->input('file');
            $missions->value = $request->input('value');

            $missions->save();

            return response()->json($missions);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $missions = Missions::find($id);

            $missions->name = $request->input('name');
            $missions->description = $request->input('description');
            $missions->file = $request->input('file');
            $missions->value = $request->input('value');

            $missions->save();

            return response()->json($missions);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function destroy($id)
    {
        try{
            $missions = Missions::find($id);

            $missions->delete();

            return response()->json($missions);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    //
}
