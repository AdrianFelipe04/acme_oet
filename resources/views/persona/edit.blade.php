@extends('layouts.app')

@section('template_title')
    Actualizar Persona
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Persona</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('personas.update', $persona->id) }}" id="form"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
