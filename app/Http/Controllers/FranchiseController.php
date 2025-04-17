<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Franchise::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $franchise = Franchise::create($request->validate([
            'name' => 'required|string|max:255',
        ]));

        return response()->json($franchise, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Franchise $franchise)
    {
        return $franchise;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Franchise $franchise)
    {
        $franchise->update($request->validate([
            'name' => 'required|string|max:255',
        ]));

        return response()->json($franchise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Franchise $franchise)
    {
        $franchise->delete();
        return response()->json(null, 204);
    }
}
