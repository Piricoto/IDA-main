@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} User
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
        <div class="">
            <div class="col-md-12">

                <div class="p-4 card card-default">
                    <div class="p-4 card-header">
                        <span class="block text-xl font-semibold">{{ __('Update') }} User</span>
                    </div>
                    <div class="mx-10 bg-white card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
