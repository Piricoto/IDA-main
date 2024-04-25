@extends('layouts.app')

@section('template_title')
    {{ $bid->name ?? __('Show') . " " . __('Bid') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Bid</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('bids.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>User Id:</strong>
                            {{ $bid->user_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Propiedad Id:</strong>
                            {{ $bid->propiedad_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apuesta:</strong>
                            {{ $bid->apuesta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
