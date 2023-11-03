<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompradorPotencial;

class CompradorPotencialController extends Controller
{
    // Mostrar una lista de compradores potenciales
    public function index()
    {
        $compradores = CompradorPotencial::all();
        return view('compradores.index', compact('compradores'));
    }

    // Mostrar el formulario para crear un nuevo comprador potencial
    public function create()
    {
        return view('compradores.create');
    }

    // Almacenar un nuevo comprador potencial en la base de datos
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $comprador = new CompradorPotencial;
        $comprador->fill($request->all());
        $comprador->save();

        // Redirige a la lista de compradores potenciales
        return redirect()->route('compradores.index');
    }

    // Mostrar un comprador potencial específico
    public function show($id)
    {
        $comprador = CompradorPotencial::findOrFail($id);
        return view('compradores.show', compact('comprador'));
    } 

    // Mostrar el formulario para editar un comprador potencial
    public function edit($id)
    {
        $comprador = CompradorPotencial::findOrFail($id);
        return view('compradores.edit', compact('comprador'));
    }

    // Actualizar un comprador potencial en la base de datos
    public function update(Request $request, $id)
    {
        $comprador = CompradorPotencial::findOrFail($id);
        $comprador->fill($request->all());
        $comprador->save();

        return redirect()->route('compradores.index');
    }

    // Eliminar un comprador potencial
    public function destroy(CompradorPotencial $comprador)
    {
        $comprador = CompradorPotencial::findOrFail($id);
        $comprador->delete();

        return redirect()->route('compradores.index');
    }
}
