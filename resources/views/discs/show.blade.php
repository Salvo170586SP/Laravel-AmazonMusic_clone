@extends('layouts.main')

@section('title', 'disco')



@section('content')
    <div class="container">
        <div class="row gy-3">
            <div class="col-12 d-flex align-items-stretch justify-content-center">
                <div class="card bg-dark mb-3" style="max-width: 940px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img width="100%" src="{{ $disc->poster }}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body p-0 px-3">
                            <div class="d-flex justify-content-end align-items-center mt-3 ">
                                <a href="{{ route('discs.edit', $disc->id) }}" class="btn btn-primary mx-2"><i class="fa-solid fa-file-pen"></i></a>
                                <form action="{{ route('discs.destroy', $disc->id) }}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                          <h5 class="card-title">{{ $disc->title }}</h5>
                          <p class="card-text">{{ $disc->author }}</p>
                          <p class="card-text"><small class="text-muted">{{ $disc->year }}</small></p>
                          <div class="card-text overflow-auto" style="height: 115px"><small>{!! $disc->description !!}</small></div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
