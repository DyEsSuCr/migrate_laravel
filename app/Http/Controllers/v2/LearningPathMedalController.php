<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\LearningPathMedal;

class LearningPathMedalController extends Controller
{
    public function index()
    {
        return LearningPathMedal::with('user')->get();
    }

    public function show($id)
    {
        return LearningPathMedal::with('user')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $learningPathMedal = LearningPathMedal::create($request->all());
        return response()->json($learningPathMedal, 201);
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
