<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::orderBy('created_at', 'desc')->get();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(Proveedor::rules());
        Proveedor::crear($data);

        return redirect()->route('proveedores.index');
    }

    public function show(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.show', compact('proveedor'));
    }

    public function edit(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, string $id)
    {
        $proveedor = Proveedor::findOrFail($id);

        $data = $request->validate(Proveedor::rules());
        $proveedor->editar($data);

        return redirect()->route('proveedores.index');
    }

    public function destroy(string $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->desactivar();

        return redirect()->route('proveedores.index');
    }
}
