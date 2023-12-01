<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expedients;
use App\Models\Properties;
use App\Models\Buyers;

class ExpedientController extends Controller
{
    public function index()
    {
        $expedients = Expedients::all();
        return view('expedients.index', compact('expedients'));
    }

    public function create()
    {
        $properties = Properties::all();
        $buyers = Buyers::all();
        return view('expedients.create', compact('properties', 'buyers'));
    }

    public function store(Request $request)
    {
        Expedients::create($request->all());
        return redirect()->route('expedients.index');
    }

    public function show($id)
    {
        $expedient = Expedients::findOrFail($id);
        return view('expedients.show', compact('expedient'));
    }

    public function edit($id)
    {
        $expedient = Expedients::findOrFail($id);
        $properties = Properties::all();
        $buyers = Buyers::all();
        return view('expedients.edit', compact('expedient', 'properties', 'buyers'));
    }

    public function update(Request $request, $id)
    {
        $expedient = Expedients::findOrFail($id);
        $expedient->update($request->all());
        return redirect()->route('expedients.index');
    }

    public function destroy($id)
    {
        $expedient = Expedients::findOrFail($id);
        $expedient->delete();
        return redirect()->route('expedients.index');
    }
}
