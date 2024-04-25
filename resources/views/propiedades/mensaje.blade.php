@extends('layouts.app')
@section('template_title')
    {{ __('Mensaje') }} Mensaje
@endsection
@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
@endsection

@section('content')
    {{ $msg }}
@endsection
