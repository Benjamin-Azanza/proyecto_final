<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::where('estado', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(Producto::rules());

        Producto::crear($data);

        return redirect()->route('productos.index');
    }

    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.show', compact('producto'));
    }

    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);

        $data = $request->validate(Producto::rules());
        $producto->editar($data);

        return redirect()->route('productos.index');
    }

    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->desactivar();

        return redirect()->route('productos.index');
    }
}
