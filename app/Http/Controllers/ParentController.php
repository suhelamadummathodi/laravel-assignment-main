<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParentModel;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ParentModel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parent = ParentModel::create($request->validate([
            'name' => 'required|string|max:255',
            'franchise_id' => 'required|exists:franchises,id',
        ]));

        return response()->json($parent, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ParentModel $parent)
    {
        return $parent;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParentModel $parent)
    {
        $parent->update($request->validate([
            'name' => 'required|string|max:255',
            'franchise_id' => 'required|exists:franchises,id',
        ]));

        return response()->json($parent);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentModel $parent)
    {
        $parent->delete();
        return response()->json(null, 204);
    }
}
