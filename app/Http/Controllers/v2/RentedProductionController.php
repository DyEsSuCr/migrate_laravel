<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\v2\RentedProduction;

class RentedProductionController extends Controller
{
    public function index()
    {
        return RentedProduction::with('user')->get();
    }

    public function store(Request $request)
    {
        $rentedProduction = RentedProduction::create($request->all());
        return response()->json($rentedProduction, 201);
    }

    public function show($id)
    {
        return RentedProduction::with('user')->find($id);
    }

    public function update(Request $request, $id)
    {
        $rentedProduction = RentedProduction::findOrFail($id);
        $rentedProduction->update($request->all());
        return response()->json($rentedProduction, 200);
    }

    public function destroy($id)
    {
        RentedProduction::destroy($id);
        return response()->json(null, 204);
    }
}
