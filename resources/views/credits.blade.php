@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')
      <div class="container">
            <div class="row">
                  <div class="col text-center mt-5">

                        <h1>Made by: LEONARDO SERRA - classe 87</h1>
                        <a class="btn btn-primary" href="{{ route('comics.index') }}">Back</a>
                  </div>

            </div>
      </div>


@endsection
