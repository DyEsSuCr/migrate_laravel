<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsyncSession;

class AsyncSessionController extends Controller
{
    public function index()
    {
        return AsyncSession::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $asyncSession = AsyncSession::create($request->all());
        return response()->json($asyncSession, 201);
    }

    public function show($id)
    {
        return AsyncSession::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $asyncSession = AsyncSession::findOrFail($id);
        $asyncSession->update($request->all());
        return response()->json($asyncSession, 200);
    }

    public function destroy($id)
    {
        AsyncSession::destroy($id);
        return response()->json(null, 204);
    }
}
