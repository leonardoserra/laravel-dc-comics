@extends('layouts.app')

@section('page-title', 'New Comic Creation')

@section('content')

      <div class="container">
            <div class="row">
                  <div class="col">
                        <form class="text-center" method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">

                              @csrf
                              @method('PUT')

                              <h1>
                                    Create a New Comic:

                              </h1>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Title</span>
                                    <input type="text" class="form-control" id="title" name="title"
                                          value="{{ $comic->title }}">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Description</span>
                                    <input type="text" class="form-control" id="description" name="description"
                                          value="{{ $comic->description }}">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Image
                                          URL</span>
                                    <input type="text" class="form-control" id="thumb" name="thumb"
                                          value="{{ $comic->thumb }}">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Price</span>
                                    <input type="text" class="form-control" id="price" name="price"
                                          value="{{ $comic->price }}">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Series</span>
                                    <input type="text" class="form-control" id="series" name="series"
                                          value="{{ $comic->series }}">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Sale
                                          Date</span>
                                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                                          value="{{ $comic->sale_date }}">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Type</span>
                                    <input type="text" class="form-control" id="type" name="type"
                                          value="{{ $comic->type }}">
                              </div>
                              <a class="btn btn-warning" href="{{ route('comics.index') }}">Back</a>

                              <button class="btn btn-primary" type="submit">Modify</button>
                        </form>

                  </div>
            </div>
      </div>

@endsection
