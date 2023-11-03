<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;
use App\Models\PropiedadInmobiliaria;
use App\Models\CompradorPotencial;

class ExpedienteController extends Controller
{
    // Función para mostrar todos los expedientes
    public function index()
    {
        $expedientes = Expediente::all(); // Obtener todos los expedientes
        return view('expediente.index', compact('expedientes'));
    }

    // Función para mostrar un expediente específico por su ID
    public function show($id)
    {
        $expediente = Expediente::find($id); // Buscar un expediente por su ID
        return view('expediente.show', compact('expediente'));
    }

    // Función para crear un nuevo expediente
    public function create()
    {
        $propiedades = PropiedadInmobiliaria::pluck('direccion', 'id');
        $compradores = CompradorPotencial::pluck('nombre', 'id');
        return view('expediente.create', compact('propiedades', 'compradores'));
    }

    // Función para almacenar un nuevo expediente en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            // Validación de los campos del expediente
            'fecha' => 'required',
            'estado' => 'required',
            'resultado' => 'required',
            'IDPropiedad' => 'required',
            'IDComprador' => 'required',
        ]);

        Expediente::create($request->all()); // Crear un nuevo expediente en la base de datos

        return redirect()->route('expediente.index')->with('success', 'Expediente creado con éxito');
    }

    // Función para editar un expediente
    public function edit($id)
    {
        $expediente = Expediente::find($id); // Buscar un expediente por su ID
        $propiedades = PropiedadInmobiliaria::pluck('direccion', 'id');
        $compradores = CompradorPotencial::pluck('nombre', 'id');
        return view('expediente.edit', compact('expediente', 'propiedades', 'compradores'));
    }

    // Función para actualizar un expediente en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            // Validación de los campos del expediente
            'fecha' => 'required',
            'estado' => 'required',
            'resultado' => 'required',
            'IDPropiedad' => 'required',
            'IDComprador' => 'required',
        ]);

        Expediente::where('id', $id)->update($request->except('_token', '_method'));;
        $expediente->update($request); // Actualizar el expediente en la base de datos

        return redirect()->route('expediente.index')->with('success', 'Expediente actualizado con éxito');
    }

    // Función para eliminar un expediente
    public function destroy($id)
    {
        $expediente = Expediente::find($id);
        $expediente->delete(); // Eliminar el expediente de la base de datos

        return redirect()->route('expediente.index')->with('success', 'Expediente eliminado con éxito');
    }
}
