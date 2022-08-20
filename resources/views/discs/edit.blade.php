@extends('layouts.main')

@section('title', 'modifica disco')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" mb-5">
                    <a href="{{ route('discs.index') }}" class="btn btn-primary mb-3">Torna ai dischi</a>
                    <h2>Modifica Disco</h2>
                </div>
            </div>

            {{-- alert errors --}}
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="col-12">

                <form action="{{ route('discs.update', $disc->id) }}" method="POST">
                    @method('PUT')

                    @csrf

                    <span>Aggiungi titolo</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" value="{{ $disc->title }}"  name="title">
                    </div>

                    <span>Aggiungi nome gruppo</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="author" value="{{ $disc->author }}" >
                    </div>

                    <span>Aggiungi anno</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="year" value="{{ $disc->year }}" >
                    </div>

                    <span>Aggiungi immagine</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="poster" value="{{ $disc->poster }}" >
                    </div>

                    <span>Aggiungi genere</span>
                    <div class="input-group my-2">
                        <input type="text" class="form-control" name="genre" value="{{ $disc->genre }}" >
                    </div>

                    <span>Aggiungi Descrizione</span>
                    <div class="input-group my-2">
                        <textarea class="form-control" name="description" aria-label="With textarea">{{ $disc->description }}</textarea>
                    </div>

                    <button class="btn btn-primary">Aggiungi</button>
                </form>

            </div>
        </div>
    </div>



@endsection
