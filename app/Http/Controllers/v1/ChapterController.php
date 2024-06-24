<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function index()
    {
        return Chapter::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $chapter = Chapter::create($request->all());
        return response()->json($chapter, 201);
    }

    public function show($id)
    {
        return Chapter::find($id);
    }

    public function edit($id)
    {
        //
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
