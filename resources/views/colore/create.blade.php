@extends('layouts.app')

@section('template_title')
    Crear Color
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Color</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('colores.store') }}" id="form"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('colore.form')

                        </form>
                        <script src="{{asset('js/colore.js')}}"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
