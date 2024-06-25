<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\AsyncSession;

class AsyncSessionController extends Controller
{
    public function index()
    {
        return AsyncSession::with('user')->get();
    }

    public function show($id)
    {
        return AsyncSession::with('user')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $asyncSession = AsyncSession::create($request->all());
        return response()->json($asyncSession, 201);
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
