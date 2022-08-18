@extends('layouts.main')

@section('title', 'Elenco dischi')



@section('content')
    <div class="container">
        <div class="row gy-3">
            @forelse ($discs as $disc)
                <div class="col col-md-3 d-flex align-items-stretch justify-content-center">
                    <div class="card bg-dark text-center p-2" style="width: 300px">
                        <figure>
                            <img height="200" src="{{ $disc['poster'] }}" alt="spaghetto quadrato">
                        </figure>
                        <h4>{{ $disc['title'] }}</h4>
                        <p>{{ $disc['author'] }}</p>
                        <em>{{ $disc['year'] }}</em>
                    </div>
                </div>
            @empty
                <h2>Non ci sono dischi disponibili</h2>
            @endforelse
        </div>
    </div>
@endsection
