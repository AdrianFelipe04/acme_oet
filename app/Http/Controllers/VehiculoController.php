<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Persona;
use App\Models\Colore;
use App\Models\Tipovehiculo;
use App\Models\Marca;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

/**
 * Class VehiculoController
 * @package App\Http\Controllers
 */
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::paginate();

        return view('vehiculo.index', compact('vehiculos'))
            ->with('i', (request()->input('page', 1) - 1) * $vehiculos->perPage());
    }

    public function pdf()
    {
        $vehiculos = Vehiculo::paginate();
        $tipovehiculo = Tipovehiculo::pluck('Tipovehiculo','id');
        $marca = Marca::pluck('Marca','id');
        $color = Colore::pluck('Color','id');
        $persona = Persona::pluck('Primernombre','id');

        $pdf = Pdf::loadView('vehiculo.pdf', ['vehiculos'=>$vehiculos]);
        return $pdf->stream();

        //return view('vehiculo.pdf', compact('vehiculos','tipovehiculo','marca','color','persona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehiculo = new Vehiculo();
        $tipovehiculo = Tipovehiculo::pluck('Tipovehiculo','id');
        $marca = Marca::pluck('Marca','id');
        $color = Colore::pluck('Color','id');
        // $persona = Persona::pluck('Primernombre', 'id');
        $personaC = Persona::where('idTipopersona', 1)->pluck('Primernombre', 'id');
        $personaP = Persona::where('idTipopersona', 2)->pluck('Primernombre', 'id');

        return view('vehiculo.create', compact('vehiculo','tipovehiculo','marca','color','personaC','personaP'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo = Vehiculo::create($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculo.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        $tipovehiculo = Tipovehiculo::pluck('Tipovehiculo','id');
        $marca = Marca::pluck('Marca','id');
        $color = Colore::pluck('Color','id');
        // $persona = Persona::pluck('Primernombre', 'id');
        $personaC = Persona::where('idTipopersona', 1)->pluck('Primernombre', 'id');
        $personaP = Persona::where('idTipopersona', 2)->pluck('Primernombre', 'id');

        return view('vehiculo.edit', compact('vehiculo','tipovehiculo','marca','color','personaC','personaP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        request()->validate(Vehiculo::$rules);

        $vehiculo->update($request->all());

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id)->delete();

        return redirect()->route('vehiculos.index')
            ->with('success', 'Vehiculo eliminado correctamente');
    }
}
