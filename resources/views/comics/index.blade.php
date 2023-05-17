@extends('layouts.app')

@section('page-title', 'Comics List')

@section('content')
      <div class="container">
            <div class="row">
                  <table class="table table-striped">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Series</th>
                                    <th scope="col">Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @foreach ($comics as $comic)
                                    <tr>
                                          <td scope="row">{{ $comic->id }}</td>
                                          <td>{{ $comic->title }}</td>
                                          <td>{{ $comic->price }}€</td>
                                          <td>{{ $comic->series }}</td>
                                          <td>
                                                <a class="btn btn-primary"
                                                      href="{{ route('comics.show', ['comic' => $comic->id]) }}">Details</a>
                                                <a class="btn btn-warning" href="#">Modify</a>
                                                <a class="btn btn-danger" href="#">Delete</a>
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>
                  </table>


            </div>
      </div>


@endsection
