<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Models\MyStoryTraining;

class MyStoryTrainingController extends Controller
{
    public function index()
    {
        return MyStoryTraining::with('user')->get();
    }

    public function store(Request $request)
    {
        $myStoryTraining = MyStoryTraining::create($request->all());
        return response()->json($myStoryTraining, 201);
    }

    public function show($id)
    {
        return MyStoryTraining::with('user')->find($id);
    }

    public function update(Request $request, $id)
    {
        $myStoryTraining = MyStoryTraining::findOrFail($id);
        $myStoryTraining->update($request->all());
        return response()->json($myStoryTraining, 200);
    }

    public function destroy($id)
    {
        MyStoryTraining::destroy($id);
        return response()->json(null, 204);
    }
}
