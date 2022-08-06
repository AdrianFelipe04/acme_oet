@extends('layouts.app')

@section('template_title')
    {{ $colore->name ?? 'Ver Color' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Color</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('colores.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $colore->Color }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
