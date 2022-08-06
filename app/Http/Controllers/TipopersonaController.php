<?php

namespace App\Http\Controllers;

use App\Models\Tipopersona;
use Illuminate\Http\Request;

/**
 * Class TipopersonaController
 * @package App\Http\Controllers
 */
class TipopersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipopersonas = Tipopersona::paginate();

        return view('tipopersona.index', compact('tipopersonas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipopersonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipopersona = new Tipopersona();
        return view('tipopersona.create', compact('tipopersona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipopersona::$rules);

        $tipopersona = Tipopersona::create($request->all());

        return redirect()->route('tipopersonas.index')
            ->with('success', 'Tipo de persona creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipopersona = Tipopersona::find($id);

        return view('tipopersona.show', compact('tipopersona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipopersona = Tipopersona::find($id);

        return view('tipopersona.edit', compact('tipopersona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipopersona $tipopersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipopersona $tipopersona)
    {
        request()->validate(Tipopersona::$rules);

        $tipopersona->update($request->all());

        return redirect()->route('tipopersonas.index')
            ->with('success', 'Tipo de persona actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipopersona = Tipopersona::find($id)->delete();

        return redirect()->route('tipopersonas.index')
            ->with('success', 'Tipo de persona eliminada correctamente');
    }
}
