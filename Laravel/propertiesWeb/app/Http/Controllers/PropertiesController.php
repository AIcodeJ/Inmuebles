<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;

class PropertiesController extends Controller
{
    public function index()
    {
        $properties = Properties::all();
        return view('properties.index', compact('properties'));
    }

    public function create()
    {
        return view('properties.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Address' => 'required|string',
            'Description' => 'required|string',
            'EstimatedValue' => 'required|numeric',
            'Status' => 'required|string',
            'PropertyDistribution' => 'required|string',
            'ConstructionArea' => 'required|integer',
            'SurfaceArea' => 'required|integer',
            'Municipality' => 'required|string',
        ]);
    
        Properties::create($data);

        return redirect()->route('properties.index');
    }

    public function show($id)
    {
        $property = Properties::findOrFail($id);
        return view('properties.show', compact('property'));
    }

    public function edit($id)
    {
        $property = Properties::findOrFail($id);
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, $id)
    {
        $property = Properties::findOrFail($id);
        $property->update($request->all());
        return redirect()->route('properties.index');
    }

    public function destroy($id)
    {
        $property = Properties::findOrFail($id);
        $property->delete();
        return redirect()->route('properties.index');
    }
}
