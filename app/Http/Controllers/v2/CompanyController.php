<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::with('tenants.users')->get();
    }

    public function show($id)
    {
        return Company::with('tenants.users')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return response()->json($company, 201);
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());
        return response()->json($company, 200);
    }

    public function destroy($id)
    {
        Company::destroy($id);
        return response()->json(null, 204);
    }
}
