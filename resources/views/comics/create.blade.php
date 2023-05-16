@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')

      <div class="container">
            <div class="row">
                  <form class="text-center" method="POST" action="{{ route('comics.store') }}">
                        @csrf
                        <h1>
                              Create a New Comic:

                        </h1>
                        <div class="input-group mb-3">
                              <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Title</span>
                              <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                              <span style="width: 7rem" class="input-group-text"
                                    id="inputGroup-sizing-default">Description</span>
                              <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                              <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Image
                                    URL</span>
                              <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                              <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Price</span>
                              <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                              <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Series</span>
                              <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                              <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Sale
                                    Date</span>
                              <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                              <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Type</span>
                              <input type="text" class="form-control">
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>
                  </form>
            </div>
      </div>
@endsection
