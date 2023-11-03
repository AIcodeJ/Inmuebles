<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    // Mostrar una lista de registros
    public function index()
    {
        $personal = Personal::all();
        return view('personal.index', compact('personal'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('personal.create');
    }

    // Almacenar un nuevo registro
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'contrasena' => 'required',
            'rol' => 'required',
        ]);

        Personal::create($request->all());

        return redirect()->route('personal.index')->with('success', 'Registro creado exitosamente.');
    }

    // Mostrar un registro específico
    public function show($id)
    {
        $personal = Personal::find($id);
        return view('personal.show', compact('personal'));
    }

    // Mostrar el formulario de edición
    public function edit($id)
    {
        $personal = Personal::find($id);
        return view('personal.edit', compact('personal'));
    }

    // Actualizar un registro existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'usuario' => 'required',
            'contrasena' => 'required',
            'rol' => 'required',
        ]);

        Personal::find($id)->update($request->all());

        return redirect()->route('personal.index')->with('success', 'Registro actualizado exitosamente.');
    }

    // Eliminar un registro
    public function destroy($id)
    {
        Personal::find($id)->delete();

        return redirect()->route('personal.index')->with('success', 'Registro eliminado exitosamente.');
    }
}
