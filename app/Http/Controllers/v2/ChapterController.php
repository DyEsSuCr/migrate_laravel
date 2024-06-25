<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Chapter;

class ChapterController extends Controller
{
    public function index()
    {
        return Chapter::with('user')->get();
    }

    public function show($id)
    {
        return Chapter::with('user')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $chapter = Chapter::create($request->all());
        return response()->json($chapter, 201);
    }

    public function update(Request $request, $id)
    {
        $chapter = Chapter::findOrFail($id);
        $chapter->update($request->all());
        return response()->json($chapter, 200);
    }

    public function destroy($id)
    {
        Chapter::destroy($id);
        return response()->json(null, 204);
    }
}
