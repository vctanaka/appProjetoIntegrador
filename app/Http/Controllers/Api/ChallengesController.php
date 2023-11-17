<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Challenges;


class ChallengesController extends Controller
{
    public function index()
    {
        try{
            $challenges = Challenges::all();
            return response()->json($challenges);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function show($id)
    {
        try{
            $challenges = Challenges::findOrFail($id);

            return response()->json($challenges);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }

    }

    public function store(Request $request)
    {
        try{
            $challenges = new Challenges();

            $challenges->name = $request->input('name');
            $challenges->description = $request->input('description');
            $challenges->icon = $request->input('icon');
            $challenges->value = $request->input('value');

            $challenges->save();

            return response()->json($challenges);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }

    }

    public function update(Request $request, $id)
    {
        try{
            $challenges = Challenges::find($id);

            $challenges->name = $request->input('name');
            $challenges->description = $request->input('description');
            $challenges->icon = $request->input('icon');
            $challenges->value = $request->input('value');

            $challenges->save();

            return response()->json($challenges);
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }

    public function destroy($id)
    {
        try{
            $challenges = Challenges::find($id);
            $challenges->delete();
            return response()->json('The challenge has been deleted successfully');
        } catch (\Throwable $th) {
            return response()->json($th,500);
        }
    }
    //
}
