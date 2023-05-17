@extends('layouts.app')

@section('page-title', 'New Comic Creation')

@section('content')

      <div class="container">
            <div class="row">
                  <div class="col">
                        <form class="text-center" method="POST" action="{{ route('comics.store') }}">

                              @csrf

                              <h1>
                                    Create a New Comic:

                              </h1>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Title</span>
                                    <input type="text" class="form-control" id="title" name="title">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Description</span>
                                    <input type="text" class="form-control" id="description" name="description">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Image
                                          URL</span>
                                    <input type="text" class="form-control" id="thumb" name="thumb">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Price</span>
                                    <input type="text" class="form-control" id="price" name="price">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Series</span>
                                    <input type="text" class="form-control" id="series" name="series">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Sale
                                          Date</span>
                                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                              </div>
                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Type</span>
                                    <input type="text" class="form-control" id="type" name="type">
                              </div>
                              <a class="btn btn-warning" href="{{ route('comics.index') }}">Back</a>

                              <button class="btn btn-primary" type="submit">Save</button>
                        </form>

                  </div>
            </div>
      </div>

@endsection
