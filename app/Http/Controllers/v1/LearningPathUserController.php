<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Models\LearningPathUser;

class LearningPathUserController extends Controller
{
    public function index()
    {
        return LearningPathUser::with('user')->get();
    }

    public function store(Request $request)
    {
        $learningPathUser = LearningPathUser::create($request->all());
        return response()->json($learningPathUser, 201);
    }

    public function show($id)
    {
        return LearningPathUser::with('user')->find($id);
    }

    public function update(Request $request, $id)
    {
        $learningPathUser = LearningPathUser::findOrFail($id);
        $learningPathUser->update($request->all());
        return response()->json($learningPathUser, 200);
    }

    public function destroy($id)
    {
        LearningPathUser::destroy($id);
        return response()->json(null, 204);
    }
}
