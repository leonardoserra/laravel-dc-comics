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
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                          id="title" name="title" value="{{ old('title') }}">
                              </div>

                              <div>
                                    @error('title')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>

                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Description</span>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                                          id="description" name="description" value="{{ old('description') }}">
                              </div>

                              <div>
                                    @error('description')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>

                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Image
                                          URL</span>
                                    <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                                          id="thumb" name="thumb" value="{{ old('thumb') }}">
                              </div>

                              <div>
                                    @error('thumb')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>

                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Price</span>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                          id="price" name="price" value="{{ old('price') }}">
                              </div>

                              <div>
                                    @error('price')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>

                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text"
                                          id="inputGroup-sizing-default">Series</span>
                                    <input type="text" class="form-control @error('series') is-invalid @enderror"
                                          id="series" name="series" value="{{ old('series') }}">
                              </div>

                              <div>
                                    @error('series')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>

                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text" id="inputGroup-sizing-default">Sale
                                          Date</span>
                                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror"
                                          id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                              </div>

                              <div>
                                    @error('sale_date')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>

                              <div class="input-group mb-3">
                                    <span style="width: 7rem" class="input-group-text "
                                          id="inputGroup-sizing-default">Type</span>
                                    <input type="text" class="form-control @error('type') is-invalid @enderror"
                                          id="type" name="type" value="{{ old('type') }}">
                              </div>

                              <div>
                                    @error('type')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                              </div>

                              <a class="btn btn-warning" href="{{ route('comics.index') }}">Back</a>

                              <button class="btn btn-primary" type="submit">Save</button>
                        </form>

                  </div>
            </div>
      </div>

@endsection
