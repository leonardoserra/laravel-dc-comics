<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      {{-- style --}}
      @vite('resources/js/app.js')

      <title>@yield('page-title')</title>
</head>

<body>
      @include('partials.header')


      @if ($errors->any())
            <div class="alert alert-danger">
                  <ul>
                        @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                        @endforeach
                  </ul>
            </div>
      @endif

      <div class="container">
            <div class="row">
                  <div class="col">

                        @if (session('status'))
                              <div class="alert alert-success">
                                    {{ session('status') }}
                              </div>
                        @endif
                  </div>
            </div>
      </div>

      @yield('content')


</body>

</html>
