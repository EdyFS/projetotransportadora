<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carga;
use App\Models\Cliente;
use App\Models\Motorista;

class CargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carga = Carga::with('cliente')->with('motorista')->get();
        return view("carga.index", compact('carga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = Cliente::all();
        $motorista = Motorista::all();
        return view("carga.create", compact('cliente','motorista'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Carga::create($request->all());
        return redirect("/carga");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $carga = Carga::with('cliente')->with('motorista')->findOrFail($id);
        //Encadear o método WITH CASO tenha relacionamento com mais de uma model
        //Exemplo:
        //$produto = Produto::with('categoria')->with('vendedor')->findOrFail($id);
        return view('carga.show', compact('carga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carga = Carga::with('cliente')->with('motorista')->findOrFail($id);
        //Encadear o método WITH CASO tenha relacionamento com mais de uma model
        //Exemplo:
        //$produto = Produto::with('categoria')->with('vendedor')->findOrFail($id);
        $cliente = Cliente::all();
        $motorista = Motorista::all();
        return view('produto.edit', compact('produto', 'cliente', 'motorista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carga = Carga::findOrFail($id);
        $carga->update($request->all());
        return redirect('/carga');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carga = Carga::findOrFail($id);
        $carga->delete();
        return redirect('/carga');
    }
}
