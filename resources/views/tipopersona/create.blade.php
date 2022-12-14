@extends('layouts.app')

@section('template_title')
    Create Tipopersona
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Tipo de Persona</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipopersonas.store') }}" id="form"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipopersona.form')

                        </form>
                        <script src="{{asset('js/tipopersona.js')}}"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
