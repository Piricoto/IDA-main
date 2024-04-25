@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? __('Show') . ' ' . __('User') }}
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
                <div class="card">
                    <div class="card-header"
                        style="padding: 20px; display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="text-xl font-semibold block">{{ __('Show') }} User</span>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('users.index') }}"
                                class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">{{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <!-- component -->
                        <!-- This is an example component -->

                        <div class="h-full">

                            <div class="border-b-2 block md:flex">

                                <div class="w-full md:w-2/5 p-4 sm:p-6 lg:p-8 bg-white shadow-md">
                                    <div class="flex justify-between">
                                        <span class="text-xl font-semibold block">Admin Profile</span>
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="-mt-2 text-md font-bold text-white bg-gray-700 rounded-full px-5 py-2 hover:bg-gray-800">Edit</a>
                                    </div>

                                    <span class="text-gray-600">This information is secret so be careful</span>
                                    <div class="w-full p-8 mx-2 flex justify-center">
                                        <img id="showImage" class="max-w-xs w-32 items-center border"
                                            src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200"
                                            alt="">
                                    </div>
                                </div>

                                <div class="w-full md:w-3/5 p-8 bg-white lg:ml-4 shadow-md">
                                    <div class="rounded  shadow p-6">
                                        <div class="pb-6">
                                            <label for="name"
                                                class="font-semibold text-gray-700 block pb-1">Name</label>
                                            <div class="flex">
                                                <input disabled id="username" class="border-1  rounded-r px-4 py-2 w-full"
                                                    type="text" value="{{ $user->name }}" />
                                            </div>
                                        </div>
                                        <div class="pb-4">
                                            <label for="about"
                                                class="font-semibold text-gray-700 block pb-1">Email</label>
                                            <input disabled id="email" class="border-1  rounded-r px-4 py-2 w-full"
                                                type="email" value="{{ $user->email }}" />
                                            <span class="text-gray-600 pt-4 block opacity-70">Personal login information of
                                                your account</span>
                                        </div>
                                        <div class="pb-4">
                                            <label for="about" class="font-semibold text-gray-700 block pb-1">Profile
                                                Photo Path:</label>
                                            <input disabled id="photo" class="border-1  rounded-r px-4 py-2 w-full"
                                                type="email" value="{{ $user->profile_photo_path }}" />
                                            <span class="text-gray-600 pt-4 block opacity-70">Personal Photo information of
                                                your account</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
