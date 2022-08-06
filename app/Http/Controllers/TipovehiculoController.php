<?php

namespace App\Http\Controllers;

use App\Models\Tipovehiculo;
use Illuminate\Http\Request;

/**
 * Class TipovehiculoController
 * @package App\Http\Controllers
 */
class TipovehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipovehiculos = Tipovehiculo::paginate();

        return view('tipovehiculo.index', compact('tipovehiculos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipovehiculos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipovehiculo = new Tipovehiculo();
        return view('tipovehiculo.create', compact('tipovehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipovehiculo::$rules);

        $tipovehiculo = Tipovehiculo::create($request->all());

        return redirect()->route('tipovehiculos.index')
            ->with('success', 'Tipo de vehiculo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipovehiculo = Tipovehiculo::find($id);

        return view('tipovehiculo.show', compact('tipovehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipovehiculo = Tipovehiculo::find($id);

        return view('tipovehiculo.edit', compact('tipovehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipovehiculo $tipovehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipovehiculo $tipovehiculo)
    {
        request()->validate(Tipovehiculo::$rules);

        $tipovehiculo->update($request->all());

        return redirect()->route('tipovehiculos.index')
            ->with('success', 'Tipo de vehiculo actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipovehiculo = Tipovehiculo::find($id)->delete();

        return redirect()->route('tipovehiculos.index')
            ->with('success', 'Tipo de vehiculo aliminado correctamente');
    }
}
