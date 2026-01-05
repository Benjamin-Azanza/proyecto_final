<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function index()
    {
        $bodegas = Bodega::orderBy('fecha', 'desc')->get();
        return view('bodegas.index', compact('bodegas'));
    }

    public function create()
    {
        return view('bodegas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(Bodega::rules());
        Bodega::crear($data);

        return redirect()->route('bodegas.index');
    }

    public function show(string $id)
    {
        $bodega = Bodega::findOrFail($id);
        return view('bodegas.show', compact('bodega'));
    }

    public function edit(string $id)
    {
        $bodega = Bodega::findOrFail($id);
        return view('bodegas.edit', compact('bodega'));
    }

    public function update(Request $request, string $id)
    {
        $bodega = Bodega::findOrFail($id);

        $data = $request->validate(Bodega::rules());
        $bodega->editar($data);

        return redirect()->route('bodegas.index');
    }

    public function destroy(string $id)
    {
        $bodega = Bodega::findOrFail($id);
        $bodega->desactivar();

        return redirect()->route('bodegas.index');
    }
}
