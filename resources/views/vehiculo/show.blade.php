@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? 'Ver Vehiculo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $vehiculo->Placa }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $vehiculo->colore->Color }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->marca->Marca }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Vehiculo:</strong>
                            {{ $vehiculo->tipovehiculo->Tipovehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Conductor:</strong>
                            {{ $vehiculo->personaP->Primernombre }} {{ $vehiculo->personaP->Segundonombre }} {{ $vehiculo->personaP->Apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $vehiculo->persona->Primernombre }} {{ $vehiculo->persona->Segundonombre }} {{ $vehiculo->persona->Apellidos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
