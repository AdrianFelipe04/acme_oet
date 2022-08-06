@extends('layouts.app')

@section('template_title')
    Actualizar Tipo de Vehiculo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Tipo de Vehiculo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipovehiculos.update', $tipovehiculo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipovehiculo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
