<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personals;

class PersonalController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de personal desde la base de datos
        $personals = Personals::all();

        // Retornar la vista index con los registros de personal
        return view('personals.index', compact('personals'));
    }

    public function create()
    {
        // Retornar la vista create para crear un nuevo registro de personal
        return view('personals.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar el nuevo registro de personal en la base de datos
        $request->validate([
            'User' => 'required|unique:personals',
            'Password' => 'required',
            'Role' => 'required',
        ]);

        Personals::create($request->all());

        // Redirigir a la vista index después de crear el nuevo registro
        return redirect()->route('personals.index');
    }

    public function show($id)
    {
        // Obtener y mostrar los detalles de un registro de personal específico
        $personal = Personals::findOrFail($id);

        // Retornar la vista show con los detalles del registro de personal
        return view('personals.show', compact('personal'));
    }

    public function edit($id)
    {
        // Obtener el registro de personal que se desea editar
        $personal = Personals::findOrFail($id);

        // Retornar la vista edit con el registro de personal a editar
        return view('personals.edit', compact('personal'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar el registro de personal en la base de datos
        $request->validate([
            'User' => 'required|unique:personals,User,' . $id,
            'Password' => 'required',
            'Role' => 'required',
        ]);

        $personal = Personals::findOrFail($id);
        $personal->update($request->all());

        // Redirigir a la vista index después de actualizar el registro
        return redirect()->route('personals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el registro de personal de la base de datos
        $personal = Personals::findOrFail($id);
        $personal->delete();

        // Redirigir a la vista index después de eliminar el registro
        return redirect()->route('personals.index');
    }
}
