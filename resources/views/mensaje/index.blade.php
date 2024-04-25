@extends('layouts.app')

@section('template_title')
    Mensaje
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header ">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mensaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mensajes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Emisor Id</th>
										<th>Receptor Id</th>
										<th>Propiedad Id</th>
										<th>Contenido</th>
										<th>Leido</th>
										<th>Fecha Enviado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mensajes as $mensaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mensaje->emisor_id }}</td>
											<td>{{ $mensaje->receptor_id }}</td>
											<td>{{ $mensaje->propiedad_id }}</td>
											<td>{{ $mensaje->contenido }}</td>
											<td>{{ $mensaje->leido }}</td>
											<td>{{ $mensaje->fecha_enviado }}</td>

                                            <td>
                                                <form action="{{ route('mensajes.destroy',$mensaje->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mensajes.show',$mensaje->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mensajes.edit',$mensaje->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $mensajes->links() !!}
            </div>
        </div>
    </div>

    <div class="display: flex; justify-content: space-between; align-items: center;" style="min-height: 1302.12px;">

        <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Inbox</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Inbox</li>
        </ol>
        </div>
        </div>
        </div>
        </section>
        
        <section class="content">
        <div class="row">
        <div class="col-md-3">
        <a href="compose.html" class="btn btn-primary btn-block mb-3">Compose</a>
        <div class="card">
        <div class="card-header">
        <h3 class="card-title">Folders</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
        </div>
        </div>
        <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
        <li class="nav-item active">
        <a href="#" class="nav-link">
        <i class="fas fa-inbox"></i> Inbox
        <span class="badge bg-primary float-right">12</span>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="far fa-envelope"></i> Sent
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="far fa-file-alt"></i> Drafts
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="fas fa-filter"></i> Junk
        <span class="badge bg-warning float-right">65</span>
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="far fa-trash-alt"></i> Trash
        </a>
        </li>
        </ul>
        </div>
        
        </div>
        
        <div class="card">
        <div class="card-header">
        <h3 class="card-title">Labels</h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
        </button>
        </div>
        </div>
        <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="far fa-circle text-danger"></i>
        Important
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="far fa-circle text-warning"></i> Promotions
        </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
        <i class="far fa-circle text-primary"></i>
        Social
        </a>
        </li>
        </ul>
        </div>
        
        </div>
        
        </div>
        
        <div class="col-md-9">
        <div class="card card-primary card-outline" data-dashlane-rid="0a32027b6cd38ca6" data-form-type="">
        <div class="card-header">
        <h3 class="card-title">Inbox</h3>
        <div class="card-tools">
        <div class="input-group input-group-sm">
        <input type="text" class="form-control" placeholder="Search Mail" data-dashlane-rid="01f5d28d291bcf8b" data-form-type="">
        <div class="input-group-append">
        <div class="btn btn-primary">
        <i class="fas fa-search"></i>
        </div>
        </div>
        </div>
        </div>
        
        </div>
        
        <div class="card-body p-0">
        <div class="mailbox-controls">
        
        <button type="button" class="btn btn-default btn-sm checkbox-toggle" data-dashlane-rid="e689bb4f4c19a213" data-dashlane-label="true" data-form-type=""><i class="far fa-square"></i>
        </button>
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="deab01b90b90ccd4" data-dashlane-label="true" data-form-type="">
        <i class="far fa-trash-alt"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="460b1cbb4e828b4c" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-reply"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="6476f7b2ce6fd76f" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-share"></i>
        </button>
        </div>
        
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="5291945cdf39ce5c" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-sync-alt"></i>
        </button>
        <div class="float-right">
        1-50/200
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="b6688900e997cc7c" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="0807f5142e1cdc5f" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-chevron-right"></i>
        </button>
        </div>
        
        </div>
        
        </div>
        <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
        <tbody>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check1" data-dashlane-rid="59826a363bbbf57a" data-form-type="">
        <label for="check1"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">5 mins ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check2" data-dashlane-rid="d517a042b966fa8a" data-form-type="">
        <label for="check2"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">28 mins ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check3" data-dashlane-rid="1664b1c7c34bce54" data-form-type="">
        <label for="check3"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">11 hours ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check4" data-dashlane-rid="0963436392a9431f" data-form-type="">
        <label for="check4"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">15 hours ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check5" data-dashlane-rid="661aca368bd8272e" data-form-type="">
        <label for="check5"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">Yesterday</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check6" data-dashlane-rid="905eff0a841f7adf" data-form-type="">
        <label for="check6"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check7" data-dashlane-rid="b6efab7ee8caa443" data-form-type="">
        <label for="check7"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check8" data-dashlane-rid="309186b4859c574c" data-form-type="">
        <label for="check8"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check9" data-dashlane-rid="7a20617d296595ae" data-form-type="">
        <label for="check9"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check10" data-dashlane-rid="c126adf8ca86f0e3" data-form-type="">
        <label for="check10"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">2 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check11" data-dashlane-rid="5a66a40d8e43314b" data-form-type="">
        <label for="check11"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">4 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check12" data-dashlane-rid="a522d46f09251f88" data-form-type="">
        <label for="check12"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">12 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check13" data-dashlane-rid="dbcca86f543101a0" data-form-type="">
        <label for="check13"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">12 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check14" data-dashlane-rid="e2590892382152a0" data-form-type="">
        <label for="check14"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">14 days ago</td>
        </tr>
        <tr>
        <td>
        <div class="icheck-primary">
        <input type="checkbox" value="" id="check15" data-dashlane-rid="bda4614afe4da32e" data-form-type="">
        <label for="check15"></label>
        </div>
        </td>
        <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
        <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
        </td>
        <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
        <td class="mailbox-date">15 days ago</td>
        </tr>
        </tbody>
        </table>
        
        </div>
        
        </div>
        
        <div class="card-footer p-0">
        <div class="mailbox-controls">
        
        <button type="button" class="btn btn-default btn-sm checkbox-toggle" data-dashlane-rid="a0116b9077984267" data-dashlane-label="true" data-form-type="">
        <i class="far fa-square"></i>
        </button>
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="070f23a2d0e3e331" data-dashlane-label="true" data-form-type="">
        <i class="far fa-trash-alt"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="db996ec28f262ac3" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-reply"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="d223a36fe9c6911c" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-share"></i>
        </button>
        </div>
        
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="890478df0ca987ed" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-sync-alt"></i>
        </button>
        <div class="float-right">
        1-50/200
        <div class="btn-group">
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="37f55723f3972964" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm" data-dashlane-rid="08842f743e09e7f7" data-dashlane-label="true" data-form-type="">
        <i class="fas fa-chevron-right"></i>
        </button>
        </div>
        
        </div>
        
        </div>
        </div>
        </div>
        
        </div>
        
        </div>
        
        </section>
        
        </div>
@endsection

@section('js')
@vite(['resources/js/jquery/jquery.min.js', 'resources/js/bootstrap/js/bootstrap.bundle.min.js','resources/js/adminlte.min.js'])
{{-- @vite(['resources/js/bootstrap/js/bootstrap.bundle.min.js', 'resources/js/jquery/jquery.min.js']) --}}
{{-- <script src="../../plugins/jquery/jquery.min.js"></script> --}}
{{-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
@endsection

@section('css')
@vite(['resources/css/fontawesome-free/css/all.min.css', 'resources/css/icheck-bootstrap/icheck-bootstrap.min.css','resources/css/adminlte.css'])
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
{{-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> --}}
{{-- <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
@endsection
