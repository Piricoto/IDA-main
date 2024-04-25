@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} propiedad
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
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

                {{-- {{$identificador}} --}}
                <div class="card">
                    <div class="px-4 mx-auto bg-white card-header max-w-screen-2xl sm:px-6 lg:px-8 py-7">
                        <span class="card-title">{{ __('Update') }} propiedad</span>
                    </div>
                    <div class="bg-white card-body">
                        <form action="{{ route('updateprop', $data['propiedad']['id']) }}" method="POST" role="form"
                            enctype="multipart/form-data">

                            @method('PUT')
                            @csrf
                            {{-- {{ method_field('PATCH') }} --}}
                            {{-- <input type="hidden" name="_method" value="PUT"> --}}
                            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

                            @include('propiedades.formEdit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('form')
    <section class="content container-fluid">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form action="{{ URL('uploadFiles') }}" method="post" enctype="multipart/form-data" id="image-upload"
                class="dropzone border-0.5 card-header bg-white max-w-5xl mx-auto sm:px-6 lg:px-8 py-5">
                @csrf
                <input type="hidden" name="id" value={{ $data['propiedad']['id'] }}>
                <div class="text-center py-1.5">
                    <svg class="w-12 h-12 mx-auto text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                </div>

            </form>
        </div>
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
                                        Imagen <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                                        </svg>
                                    </p>
                                </th>


                                <th
                                    class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                                    <p
                                        class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                        Actions</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data['imagenes'] as $propiedad)
                                <tr>

                                    <td class="p-4 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-3">
                                            <div class="flex flex-col">
                                                <p
                                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                                    <img src="{{ asset('storage/images/' . $propiedad->ruta) }}"
                                                        alt="" class='thumb'
                                                        style='max-width: 100px; max-height: 100px;'>
                                                </p><input type="hidden" value={{ $propiedad->ruta }} />
                                                {{-- <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">{{asset('storage/images/'.$propiedad->ruta) }}</p> --}}
                                            </div>
                                        </div>
                                    </td>

                                    <td class="p-4 border-b border-blue-gray-50">
                                        <form action="{{ route('imagenes.destroy', $propiedad->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @endif --}}
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <script type="text/javascript">
        //    Dropzone.options.imageUpload = {
        Dropzone.options.image - upload = {

            addRemoveLinks: true,
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 100,
            maxFilesize: 23,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            url: "/uploadFiles",

        };
    </script>
@endsection
