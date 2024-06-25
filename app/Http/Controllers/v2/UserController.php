<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\User;

class UserController extends Controller
{
    public function index()
    {
        return User::with(['company', 'tenant', 'role', 'chapters', 'productions', 'myStoryTrainings', 'learningPathMedals', 'learningPathUsers', 'rentedProductions', 'asyncSessions'])->get();
    }

    public function show($id)
    {
        return User::with(['company', 'tenant', 'role', 'chapters', 'productions', 'myStoryTrainings', 'learningPathMedals', 'learningPathUsers', 'rentedProductions', 'asyncSessions'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }
}
