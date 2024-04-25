@extends('layouts.app')


@section('template_title')
    {{ __('Crear') }} Propiedad
@endsection
@section('content')
    <section class="content container-fluid">
        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    <strong>Errores encontrados:</strong>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @isset($mensaje)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡{{ $mensaje }}!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endisset
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="py-5 mx-auto bg-white card-header max-w-7xl sm:px-6 lg:px-8">
                        <span class="card-title">{{ __('Create') }} Propiedad</span>
                    </div>
                    <div class="py-5 mx-auto bg-white card-body max-w-7xl sm:px-6 lg:px-8">
                        <form method="POST" action="{{ route('propiedades.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('propiedades.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
