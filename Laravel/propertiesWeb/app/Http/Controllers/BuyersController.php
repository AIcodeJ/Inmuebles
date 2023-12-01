<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyers;

class BuyersController extends Controller
{
    public function index()
    {
        // Obtener todos los compradores potenciales desde la base de datos
        $buyers = Buyers::all();

        // Retornar la vista 'buyers.index' con los datos de los compradores
        return view('buyers.index', compact('buyers'));
    }

    public function create()
    {
        // Retornar la vista para crear un nuevo comprador
        return view('buyers.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario y crear un nuevo comprador potencial
        Buyers::create($request->all());

        // Redirigir a la lista de compradores después de la creación
        return redirect()->route('buyers.index');
    }

    public function show($id)
    {
        // Obtener y mostrar la información detallada de un comprador potencial específico
        $buyer = Buyers::findOrFail($id);
        return view('buyers.show', compact('buyer'));
    }

    public function edit($id)
    {
        // Obtener la información de un comprador potencial para su edición
        $buyer = Buyers::findOrFail($id);
        return view('buyers.edit', compact('buyer'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario y actualizar la información del comprador potencial
        $buyer = Buyers::findOrFail($id);
        $buyer->update($request->all());

        // Redirigir a la lista de compradores después de la actualización
        return redirect()->route('buyers.index');
    }

    public function destroy($id)
    {
        // Eliminar un comprador potencial específico de la base de datos
        $buyer = Buyers::findOrFail($id);
        $buyer->delete();

        // Redirigir a la lista de compradores después de la eliminación
        return redirect()->route('buyers.index');
    }
}
