@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <section id="benvenuto" class="my-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Benvenuto in Amazon Music</h2>
                    <p>* In seguito a 9,99€ al mese. L'abbonamento si rinnova automaticamente. Offerta riservata ai nuovi
                        clienti. Vedi condizioni.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="offer" class="my-3">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center banner py-3">
                    <img src="https://m.media-amazon.com/images/G/01/digital/music/logos/Two_stack_Unlimited_all_black_transparent.png"
                        alt="">
                    <div class="banner-message">
                        <p>3 MESI D'USO GRATUITO</p>
                        <h4>Offerta a tempo limitato</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center py-4">
                <button class="btn btn-primary fs-2">Iscriviti gratis</button>
            </div>
        </div>
    </section>

@endsection
