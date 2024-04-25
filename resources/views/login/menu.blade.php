@extends('login.main')

@section('menu-principal')
<nav class="container navbar navbar-expand-sm row">
    <div class="text-right col-12 col-md-12 col-lg-6 col-sm-4">
      <a class="navbar-brand" href="#">
      <img src="{{ asset('images/imagesPlantilla/logo.png') }}" alt="logo" style="width: 30%">
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
             <a class="nav-link" href="#">Inicio </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#">| Inmuebles </a>
          </li>
      <li class="nav-item">
         <a class="nav-link" href="{{ route('login'); }}">| Login</a>
    </li>
      </ul>
   </div>
</nav>
@endsection
