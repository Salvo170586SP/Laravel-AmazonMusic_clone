@extends('layouts.main')

@section('content')
    <div id="offer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <figure>
                        <img class="img-fluid" src="{{ asset('images/logo.png') }}" alt="logo">
                    </figure>
                </div>
                <div class="col-12 col-md-6">
                    <div class="banner">
                        <div class="banner-message d-flex flex-column align-items-center">
                            <p>Offerta valida per 3 mesi</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-5">
                    <a href="#" class="btn btn-primary fs-3 text-light">Scopri qui</a>
                </div>
            </div>
        </div>
    </div>
@endsection
