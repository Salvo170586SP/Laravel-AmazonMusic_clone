@extends('layouts.main')

@section('title', 'Elenco dischi')



@section('content')
    <div class="container">
        <div class="row gy-3">
                <div class="col-12 d-flex align-items-stretch justify-content-center">
                    <div class="card bg-dark d-flex flex-row justify-content-between " >
                            <figure class="p-0 m-0">
                                <img height="350" src="{{ $disc->poster }}" alt="spaghetto quadrato">
                            </figure>
                            <div class="p-4 w-75 d-flex flex-column justify-content-start align-items-start">
                                <h4>{{ $disc->title }}</h4>
                                <p>{{ $disc->author }}</p>
                                <em>{{ $disc->year }}</em>
                                <p>{{ $disc->description }}</p>
                            </div>
                    </div>
                </div>
        </div>
    </div>
@endsection