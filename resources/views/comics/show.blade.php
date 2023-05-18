@extends('layouts.app')

@section('page-title', 'Comics List')


@section('content')
      <div class="text-center"></div>
      <div class="container text-center">
            <div class="row">
                  <div class="col-3"></div>
                  <div class="card" style="width: 35rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                              <h5 class="card-title">{{ $comic->title }}</h5>
                              <p class="card-text">{{ $comic->description }}</p>
                              <a class="btn btn-primary" href="{{ route('comics.index') }}">Back</a>

                              <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modify</a>
                        </div>
                  </div>
            </div>
      </div>
@endsection
