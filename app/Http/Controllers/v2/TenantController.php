<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Tenant;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return response()->json($tenants);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $tenant = Tenant::create($request->all());
        return response()->json($tenant, 201);
    }

    public function show(string $id)
    {
        $tenant = Tenant::find($id);
        return response()->json($tenant);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $tenant = Tenant::find($id);
        $tenant->update($request->all());
        return response()->json($tenant);
    }

    public function destroy(string $id)
    {
        $tenant = Tenant::find($id);
        $tenant->delete();
        return response()->json(null, 204);
    }
}
