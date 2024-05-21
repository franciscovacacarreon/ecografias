<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RolModel;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = RolModel::all();
        return $roles;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rol = RolModel::create([
            'nombre' => $request->get('nombre'),
        ]);
        return $rol;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rol = RolModel::findOrFail($id); 
        $rol->update([
            'nombre' => $request->get('nombre')        
        ]);
        return $rol;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
