@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container-fluid">
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
            <div class="col-sm-12">
                <div class="card">
                    <div class="px-4 mx-auto card-header max-w-screen-2xl sm:px-6 lg:px-8 py-7">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="block text-xl font-semibold">Usuarios</span>

                            <div class="float-right">

                            </div>
                            <div class="float-right">
                                <button
                                    class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a
                                        href="{{ route('users.create') }}" class="float-right btn btn-primary btn-sm"
                                        data-placement="left">{{ __('Crear usuario') }}</a></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="m-4 alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                <div class="px-4 mx-auto bg-white card-body max-w-screen-2xl sm:px-6 lg:px-8">
                    <div class="table-responsive">
                        <div class="p-6 px-0 overflow-scroll">
                            <table class="w-full mt-4 text-left table-auto">
                                <thead>

                                    <tr>
                                        <th
                                            class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                                            <p
                                                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                                Desde <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    aria-hidden="true" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                </svg>
                                            </p>
                                        </th>
                                        <th
                                            class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                                            <p
                                                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                                Nombre <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    aria-hidden="true" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                </svg>
                                            </p>
                                        </th>

                                        <th
                                            class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                                            <p
                                                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                                Email <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    aria-hidden="true" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                </svg>
                                            </p>
                                        </th>
                                        <th
                                            class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                                            <p
                                                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                                Foto de perfil <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    aria-hidden="true" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                </svg>
                                            </p>
                                        </th>
                                        <th
                                            class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                                            <p
                                                class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                                Action <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    aria-hidden="true" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                </svg>
                                            </p>
                                        </th>

                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>

                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                                        </p>
                                                        <p
                                                            class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                                            {{ $user->created_at }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                                            {{ $user->name }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                                            {{ $user->email }}</p>
                                                    </div>
                                                </div>

                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div class="flex flex-col text-center align-middle">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg"
                                                            alt="John Michael"
                                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                        <p
                                                            class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                                            {{ $user->profile_photo_path }}</p>
                                                    </div>
                                                </div>
                                            </td>


                                            <td class="p-4 border-b border-blue-gray-50">
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('users.show', $user->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i></a><br>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('users.edit', $user->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i></a><br>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
