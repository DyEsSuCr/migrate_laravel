<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearningPathMedal;

class LearningPathMedalController extends Controller
{
    public function index()
    {
        return LearningPathMedal::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $learningPathMedal = LearningPathMedal::create($request->all());
        return response()->json($learningPathMedal, 201);
    }

    public function show($id)
    {
        return LearningPathMedal::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $learningPathMedal = LearningPathMedal::findOrFail($id);
        $learningPathMedal->update($request->all());
        return response()->json($learningPathMedal, 200);
    }

    public function destroy($id)
    {
        LearningPathMedal::destroy($id);
        return response()->json(null, 204);
    }
}
