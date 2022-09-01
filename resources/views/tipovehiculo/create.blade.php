@extends('layouts.app')

@section('template_title')
    Crear Tipo de Vehiculo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Tipo de Vehiculo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipovehiculos.store') }}" id="form" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipovehiculo.form')

                        </form>
                        <script src="{{asset('js/tipovehiculo.js')}}"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
