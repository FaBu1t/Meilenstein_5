<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Schiffsdatenbank</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://127.0.0.1:8000/dashboard/">Flottenmanagement</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/ships/">Schiffe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/manufacturers/">Hersteller</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/miniships/">Schiffsmodelle</a>
        </li>
    </ul>
  </div>
</nav>
    <form method="post" action="{{url('logout')}}">
      @csrf
      <input type="submit" class="btn btn-danger" value="Abmelden">
    </form>
    <div class="container">
        @yield('content')
    </div>

  </body>
</html>