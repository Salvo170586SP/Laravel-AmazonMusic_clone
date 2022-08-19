@extends('layouts.main')

@section('title', 'Aggiungi disco')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" mb-5">
                    <a href="{{ route('discs.index') }}" class="btn btn-primary mb-3">Torna ai dischi</a>
                    <h2>Aggiungi Disco</h2>
                </div>
            </div>

            <div class="col-9">
                <form action="{{ route('discs.store') }}" method="POST">
                    @csrf
                    <span>Aggiungi titolo</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="title">
                    </div>

                    <span>Aggiungi nome gruppo</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="author">
                    </div>

                    <span>Aggiungi anno</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="year">
                    </div>

                    <span>Aggiungi immagine</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="poster">
                    </div>

                    <span>Aggiungi genere</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="genre">
                    </div>

                    <span>Aggiungi Descrizione</span>
                    <div class="input-group my-2">
                        <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
                    </div>

                    <button class="btn btn-primary">Aggiungi</button>
                </form>

            </div>
        </div>
    </div>



@endsection
