@extends('layouts.app')

@section('template_title')
    {{ $tipovehiculo->name ?? 'Ver Tipo de Vehiculo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Tipo de Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipovehiculos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo de Vehiculo:</strong>
                            {{ $tipovehiculo->Tipovehiculo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
