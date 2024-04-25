<!DOCTYPE html>
<html>

<head>
    {{-- {{ $usuarios->name }} --}}
    <title>Tu nueva casa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite(['resources/css/inicio.css'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
        integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- Scripts -->

</head>

<body>
    <nav class="container navbar navbar-expand-sm row">
        <div class="text-right col-12 col-md-12 col-lg-6 col-sm-4">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/imagesPlantilla/logow.png') }}" alt="logo" style="width: 30%">
            </a>
        </div>
        <div class="text-right col-8 col-md-12 col-lg-6 col-sm-8">
            <ul class="container navbar-nav icon">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-tripadvisor"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('main') }}">Inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portal') }}">| Inmuebles </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">| Login</a>
                </li>
                @admin
                    <p>Only admin sees this</p>
                @endadmin
                @if ($message = Session::get('success'))
                    <div class="m-4 alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @else
                    <p>Only admin sees this</p>
                @endif


            </ul>
        </div>
    </nav>



    @php
        $a = 1;
    @endphp

    @foreach ($propiedades as $inmueble)
        @if ($a % 2 != 0)
            <div class="row">
        @endif
        <div class="col-12 col-md-12 col-lg-6 card">
            @php
                $img1 = asset('images/imagesPlantilla/No_Image.jpg');
                $img2 = asset('images/imagesPlantilla/No_Image.jpg');
                $img3 = asset('images/imagesPlantilla/No_Image.jpg');
                $img4 = asset('images/imagesPlantilla/No_Image.jpg');
                $img5 = asset('images/imagesPlantilla/No_Image.jpg');
                foreach ($imagenes as $image) {
                    if ($image->inmueble == $inmueble->id) {
                        if ($img1 == asset('images/imagesPlantilla/No_Image.jpg')) {
                            $img1 = asset('storage/images/' . $image->ruta);
                        } elseif ($img2 == asset('images/imagesPlantilla/No_Image.jpg')) {
                            $img2 = asset('storage/images/' . $image->ruta);
                        } elseif ($img3 == asset('images/imagesPlantilla/No_Image.jpg')) {
                            $img3 = asset('storage/images/' . $image->ruta);
                        } elseif ($img4 == asset('images/imagesPlantilla/No_Image.jpg')) {
                            $img4 = asset('storage/images/' . $image->ruta);
                        } elseif ($img5 == asset('images/imagesPlantilla/No_Image.jpg')) {
                            $img5 = asset('storage/images/' . $image->ruta);
                        }
                    }
                }
            @endphp

            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <img style="max-width:320px; max-height:198px;" src="{{ $img1 }}">
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="{{ $img2 }}" style="max-width:200px; max-height:143px; width: 45%;">
                    <img src="{{ $img3 }}" style="max-width:200px; max-height:143px; width: 45%;">
                    <img src="{{ $img4 }}" style="max-width:200px; max-height:143px; width: 45%;">
                    <img src="{{ $img5 }}" style="max-width:200px; max-height:143px; width: 45%;">
                </div>
            </div>
            <div class="card-body">
                <h3 class="text-left" style="color: #4a9375!important"><small>{{ $inmueble->titulo }}</small></h3>
                <p class="text-left">{{ $inmueble->descripcion }} </p>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6" style="background-color:#e9ecef">
                        {{ $inmueble->habitaciones }} rooms, {{ $inmueble->WC }} bathrooms,
                        {{ $inmueble->plantas }} floors, Tipo: {{ $inmueble->tipo }}, {{ $inmueble->size }} m²
                        <p style="color:#4a9375!important">Price: {{ $inmueble->precio }} €</p>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 w3-flat-sun-flower btn" data-toggle="modal"
                        data-target="#myModal5">
                        Ver Más
                    </div>
                    <div class="modal" id="myModal5">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">House in Zaslauje</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p class="text-justify">
                                        <img src="{{ $img1 }}">
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn w3-flat-sun-flower"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @if ($a % 2 == 0)
            </div>
        @endif
        @php
            $a = $a + 1;
        @endphp
    @endforeach

    {{-- {{ $imagenes }} --}}


</body>

</html>
