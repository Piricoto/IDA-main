<!DOCTYPE html>
<html>

<head>
    <title>El hogar de tus sueños</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite(['resources/css/app.css', 'resources/css/inicio.css'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
        integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- Styles -->
    @livewireStyles
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
            </ul>
        </div>
    </nav>
    <div class="main"
        style="background-image: url({{ asset('images/imagesPlantilla/1.jpg') }});background-size: cover;
      background-repeat: no-repeat;">
        <div class="row jumbotron">
            <div class="container text-center col-12 col-md-4 text">
                <h1><small>Con nosotros</small></h1>
                <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                        class="fas fa-star"></i> <i class="fas fa-star"></i></span>
                <h2><small>encontrarás tu hogar<br> 5 estrellas</small></h2><br>

                <a class="px-3 py-2 text-sm font-semibold text-white bg-yellow-600 shadow-sm btn hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600"
                    href="{{ route('portal') }}">¡¡Visítalos!!</a>

                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="second" style="background-image: url({{ asset('images/imagesPlantilla/houses.png') }});">
        <div class="container text-center jumbotron">
            <h2 class="text-center">Sistema de gestión inmobiliaria</h2><br>
            <div>
                <img src="{{ asset('images/imagesPlantilla/logo2w.png') }}" style="width: 10%;display:inline;"><br>
            </div>
            <br>
            <p class="text-center">Realiza tu oferta para uno de nuestros inmuebles y cumple tu sueño de un hogar a tu
                medida
            </p>
        </div>
    </div>
    {{-- <div class="six" style="background-image:{{ asset('images/imagesPlantilla/10.jpg') }}"><br><br>
        <h3 class="text-center text-white">Ready to rent the house?</h3><br><br>
        <p class="text-center text-white">Many desktop publishing packages and web page editors now use Lorem Ipsum as
            their
            default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
            Various
            versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the
            like).
        </p>
        <div class="row">
            <div class="container col-12 jumbotron">
                <form class="form-inline" action="send_form_email.php">
                    <label for="name">Name</label>
                    <input type="password" class="form-control" id="name" placeholder="Name" name="name">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <label for="tel">Telephone</label>
                    <input type="password" class="form-control" id="tel" placeholder="Name" name="name">
                    <button type="submit" class="btn w3-flat-sun-flower">Submit</button>
                </form>
            </div>
        </div>
    </div> --}}
</body>

</html>
