@extends('layouts.main')

@section('title', 'Elenco dischi')



@section('content')
    <div class="container">
        <div class="row gy-3">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('discs.create') }}">Aggiungi Disco</a>
            </div>
            @forelse ($discs as $disc)
                <div class="col col-md-3 d-flex align-items-stretch justify-content-center py-4">
                    <div class="card bg-dark text-center p-2" style="width: 300px">
                        <a href="{{ route("discs.show", $disc->id ) }}">
                            <figure>
                                <img height="200" src="{{ $disc->poster }}" alt="spaghetto quadrato">
                            </figure>
                        </a>
                        <h4>{{ $disc->title }}</h4>
                        <p>{{ $disc->author }}</p>
                        <em>{{ $disc->year }}</em>
                    </div>
                </div>
            @empty
                <h2>Non ci sono dischi disponibili</h2>
            @endforelse
        </div>
    </div>
@endsection