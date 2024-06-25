<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Tenant;

class TenantController extends Controller
{
    public function index()
    {
        return Tenant::with('company.users')->get();
    }

    public function show($id)
    {
        return Tenant::with('company.users')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $tenant = Tenant::create($request->all());
        return response()->json($tenant, 201);
    }

    public function update(Request $request, $id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenant->update($request->all());
        return response()->json($tenant, 200);
    }

    public function destroy($id)
    {
        Tenant::destroy($id);
        return response()->json(null, 204);
    }
}
