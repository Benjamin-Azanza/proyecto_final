<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('created_at', 'desc')->get();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(Cliente::rules());
        Cliente::crear($data);

        return redirect()->route('clientes.index');
    }

    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);

        $data = $request->validate(Cliente::rules());
        $cliente->editar($data);

        return redirect()->route('clientes.index');
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->desactivar();

        return redirect()->route('clientes.index');
    }
}
