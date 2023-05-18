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
                              @forelse ($comics as $comic)
                                    <tr>
                                          <td scope="row">{{ $comic->id }}</td>
                                          <td>{{ $comic->title }}</td>
                                          <td>{{ $comic->price }}€</td>
                                          <td>{{ $comic->series }}</td>
                                          <td class="d-flex">
                                                <a class="btn btn-primary"
                                                      href="{{ route('comics.show', ['comic' => $comic->id]) }}">Details</a>
                                                <a class="btn btn-warning ms-1 me-1"
                                                      href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modify</a>
                                                <form class="form-delete-comic" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                                      method="POST">

                                                      @csrf
                                                      @method('DELETE')
                                                      <button class="btn btn-danger" type="submit">Delete</button>

                                                </form>
                                          </td>
                                    </tr>
                              @empty
                                    <div class="alert alert-info" role="alert">
                                          The Database is Empty! Start creating your own Comic!
                                    </div>
                              @endforelse
                        </tbody>
                  </table>


            </div>
      </div>


@endsection
