<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\Production;

class ProductionController extends Controller
{
    public function index()
    {
        return Production::with('user')->get();
    }

    public function show($id)
    {
        return Production::with('user')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $production = Production::create($request->all());
        return response()->json($production, 201);
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
