@extends('layouts.app')

@section('template_title')
    <title class="text-lg font-medium">Propiedades hola</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-white max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-7">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <h1 class="px-5 text-lg">Propiedades</h1>


                            <div class="float-right">
                                <button
                                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a
                                        href="{{ route('propiedades.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">{{ __('Create New') }}</a></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="table-responsive">
                            <div class="p-6 overflow-scroll px-0">
                                <table class="mt-4 w-full table-auto text-left">
                                    <thead>
                                        <tr>
                                            <th
                                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                                <p
                                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                                    Titulo <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true" class="h-4 w-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </p>
                                            </th>

                                            <th class="">
                                                <p
                                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                                    Descripcion <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true" class="h-4 w-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </p>
                                            </th>
                                            <th
                                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                                <p
                                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                                    Precio <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true" class="h-4 w-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </p>
                                            </th>
                                            <th
                                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                                <p
                                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                                    Direccion <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true" class="h-4 w-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </p>
                                            </th>
                                            <th
                                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                                <p
                                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                                    Imagen <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true" class="h-4 w-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                                    </svg>
                                                </p>
                                            </th>
                                            <th
                                                class="cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 p-4 transition-colors hover:bg-blue-gray-50">
                                                <p
                                                    class="antialiased font-sans text-sm text-blue-gray-900 flex items-center justify-between gap-2 font-normal leading-none opacity-70">
                                                    Actions</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($propiedades as $propiedad)
                                            <tr>

                                                <td class="p-4 border-b border-blue-gray-50">
                                                    <div class="flex items-center gap-3">
                                                        <div class="flex flex-col">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                                {{ $propiedad->titulo }}</p>
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                                Start date: 10 Dec 2023</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-4 border-b border-blue-gray-50">
                                                    <div class="flex items-center gap-3">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/team-3.jpg"
                                                            alt="John Michael"
                                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                                        <div class="flex flex-col">
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                                {{ $propiedad->descripcion }}</p>
                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                                john@creative-tim.com</p>
                                                        </div>
                                                    </div>


                                                <td class="p-4 border-b border-blue-gray-50">
                                                    <div class="flex flex-col">
                                                        <p
                                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                                            {{ $propiedad->precio }}</p>

                                                    </div>
                                                </td>
                                                <td class="p-4 border-b border-blue-gray-50">
                                                    <div class="w-max">
                                                        <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-600 py-1 px-2 text-xs rounded-md"
                                                            style="opacity: 1;">

                                                            <p
                                                                class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">
                                                                {{ $propiedad->direccion }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-4 border-b border-blue-gray-50">
                                                    <img src="{{ $propiedad->imagen }}" alt="John Michael"
                                                        class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">

                                                </td>
                                                <td class="p-4 border-b border-blue-gray-50">
                                                    <form action="{{ route('propiedades.destroy', $propiedad->id) }}"
                                                        method="POST">
                                                        <a class="btn btn-sm btn-primary "
                                                            href="{{ route('propiedades.show', $propiedad->id) }}"><i
                                                                class="fa fa-fw fa-eye"></i></a><br>
                                                        <a class="btn btn-sm btn-success"
                                                            href="{{ route('propiedades.edit', $propiedad->id) }}"><i
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
                    {!! $propiedades->links() !!}
                </div>
            </div>
        </div>
    @endsection
