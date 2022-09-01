@extends('layouts.app')

@section('template_title')
    Crear Persona
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Persona</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personas.store') }}" id="form"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('persona.form')

                        </form>
                        <script src="{{asset('js/persona.js')}}"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
