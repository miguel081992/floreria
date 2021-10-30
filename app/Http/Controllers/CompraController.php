<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use App\Models\Insumo;

/**
 * Class CompraController
 * @package App\Http\Controllers
 */
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compras = Compra::paginate(10);
        $insumos = Insumo::all();
        return view('compra.index', compact('compras','insumos'))
            ->with('i', (request()->input('page', 1) - 1) * $compras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compra = new Compra();
        $insumos = Insumo::pluck('nombreInsumo','id');
        return view('compra.create', compact('compra','insumos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Compra::$rules);

        $compra = Compra::create($request->all());
        return redirect()->route('compras.index')
            ->with('success', 'Compra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compra = Compra::find($id);

        return view('compra.show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = Compra::find($id);
        $insumos = Insumo::pluck('nombreInsumo','id');
        return view('compra.edit', compact('compra','insumos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Compra $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        request()->validate(Compra::$rules);

        $compra->update($request->all());

        return redirect()->route('compras.index')
            ->with('success', 'Compra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $compra = Compra::find($id)->delete();

        return redirect()->route('compras.index')
            ->with('success', 'Compra deleted successfully');
    }
}
