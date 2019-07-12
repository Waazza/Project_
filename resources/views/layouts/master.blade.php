<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title> Projet </title>

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type='text/css'>

  @yield('scripts-header')

</head>
<body>
  <header>
  <div class="container btn-container">
      <button type="submit" class="btn btn-submit">Login / Sign up </button>
  </div>

    <nav class="navbar navbar-expand-md navbar-dark bg-info">
      <a class="navbar-brand" href="#">Animals</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#">Liens</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Mon compte</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Autres</a></li>
        </ul>
        </nav>
  </header>

  <div id="content">
    @yield('content')


  </div>
  @yield('layouts.footer')
  @yield('scripts-footer')
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{asset('js/app.js')}}"> </script>
</body>
</html>
