<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index()
    {
        return Production::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $production = Production::create($request->all());
        return response()->json($production, 201);
    }

    public function show($id)
    {
        return Production::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $production = Production::findOrFail($id);
        $production->update($request->all());
        return response()->json($production, 200);
    }

    public function destroy($id)
    {
        Production::destroy($id);
        return response()->json(null, 204);
    }
}
