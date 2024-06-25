<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Role;

class RoleController extends Controller
{
    public function index()
    {
        return Role::with('users')->get();
    }

    public function show($id)
    {
        return Role::with('users')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $role = Role::create($request->all());
        return response()->json($role, 201);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());
        return response()->json($role, 200);
    }

    public function destroy($id)
    {
        Role::destroy($id);
        return response()->json(null, 204);
    }
}
