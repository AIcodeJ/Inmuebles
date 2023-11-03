<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropiedadInmobiliaria;

class PropiedadInmobiliariaController extends Controller
{
    // Método para mostrar una lista de propiedades inmobiliarias
    public function index()
    {
        $propiedades = PropiedadInmobiliaria::all();
        return view('propiedades.index', compact('propiedades'));
    }

    // Método para mostrar el formulario de creación de una propiedad inmobiliaria
    public function create()
    {
        return view('propiedades.create');
    }

    // Método para almacenar una nueva propiedad inmobiliaria en la base de datos
    public function store(Request $request)
    {
        $propiedad = new PropiedadInmobiliaria;
        $propiedad->fill($request->all());
        $propiedad->save();

        return redirect()->route('propiedades.index')->with('success', 'Propiedad creada con éxito.');
    }

    // Método para mostrar los detalles de una propiedad inmobiliaria
    public function show($id)
    {
        $propiedad = PropiedadInmobiliaria::findOrFail($id);

        return view('propiedades.show', compact('propiedad'));
    }

    // Método para mostrar el formulario de edición de una propiedad inmobiliaria
    public function edit($id)
    {
        $propiedad = PropiedadInmobiliaria::findOrFail($id);
        return view('propiedades.edit', compact('propiedad'));
    }

    // Método para actualizar una propiedad inmobiliaria en la base de datos
    public function update(Request $request, $id)
    {
        $propiedad = PropiedadInmobiliaria::findOrFail($id);
        $propiedad->fill($request->all());
        $propiedad->save();

        return redirect()->route('propiedades.index')->with('success', 'Propiedad actualizada con éxito.');
    }

    // Método para eliminar una propiedad inmobiliaria
    public function destroy($id)
    {
        $propiedad = PropiedadInmobiliaria::findOrFail($id);
        $propiedad->delete();

        return redirect()->route('propiedades.index')->with('success', 'Propiedad eliminada con éxito.');
    }
}
