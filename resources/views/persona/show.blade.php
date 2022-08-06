@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? 'Ver Persona' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo de persona:</strong>
                            {{ $persona->idTipopersona }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $persona->Cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Primer nombre:</strong>
                            {{ $persona->Primernombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo nombre:</strong>
                            {{ $persona->Segundonombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $persona->Apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $persona->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $persona->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $persona->Ciudad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
