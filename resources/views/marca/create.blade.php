@extends('layouts.app')

@section('template_title')
    Crear Marca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Marca</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('marcas.store') }}" id="form" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('marca.form')

                        </form>
                        <script src="{{asset('js/marca.js')}}"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
