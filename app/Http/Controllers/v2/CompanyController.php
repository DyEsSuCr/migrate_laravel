<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return response()->json($company, 201);
    }

    public function show(string $id)
    {
        $company = Company::find($id);
        return response()->json($company);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $company = Company::find($id);
        $company->update($request->all());
        return response()->json($company);
    }

    public function destroy(string $id)
    {
        $company = Company::find($id);
        $company->delete();
        return response()->json(null, 204);
    }
}
