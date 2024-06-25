<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $role = Role::create($request->all());
        return response()->json($role, 201);
    }

    public function show(string $id)
    {
        $role = Role::find($id);
        return response()->json($role);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $role = Role::find($id);
        $role->update($request->all());
        return response()->json($role);
    }

    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();
        return response()->json(null, 204);
    }
}
