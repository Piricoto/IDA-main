@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Usuario
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
                    <div class="card-header">
                        <span class="block text-xl font-semibold">{{ __('Crear') }} usuario</span>
                    </div>
                    <div class="bg-white card-body">
                        <form method="POST" action="{{ route('users.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
