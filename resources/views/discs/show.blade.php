@extends('layouts.main')

@section('title', 'disco')



@section('content')
    <div class="container">
        <div class="row gy-3">
            <div class="col-12 d-flex align-items-stretch justify-content-center">
                <div class="card bg-dark d-flex flex-row justify-content-between ">
                        <figure class="p-0 m-0">
                            <img height="350" src="{{ $disc->poster }}" alt="spaghetto quadrato">
                        </figure>
                   
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <div class="text-end my-3">
                            <a href="{{ route('discs.edit', $disc->id) }}" class="btn btn-primary"><i class="fa-solid fa-file-pen"></i></a>
                        </div>
                        <div class="card-body">
                            <h4>{{ $disc->title }}</h4>
                            <p>{{ $disc->author }}</p>
                            <em>{{ $disc->year }}</em>
                            <p>{!! $disc->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
