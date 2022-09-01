@extends('layouts.app')

@section('template_title')
    Actualizar Marca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Marca</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('marcas.update', $marca->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
