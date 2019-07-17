<<<<<<< Updated upstream
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
=======
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Document</title>

    @yield('scripts-header')
</head>
<body>
<!-- Insérer le Logo ici ! -->
<!-- Login et Logout -->
  <div class="container">
    <header>
    <div class="main clearfix">
      <nav id="menu" class="nav">
        <ul>
          <li>
            <a class="btn btn-link" href="{{ route('home.index') }}">
              <span class="icon">
                <i aria-hidden="true" class="icon-home"></i>
              </span>
              <span>Home</span>
            </a>
          </li>
          <li>
            <a class="btn btn-link" href="{{route('search')}}">
              <span class="icon">
                <i aria-hidden="true" class="icon-services"></i>
              </span>
              <span>Rechercher un animal</span>
            </a>
          </li>
          <li>
            <a class="btn btn-link" href="{{ route('Inscription') }}">
              <span class="icon">
                <i aria-hidden="true" class="icon-portfolio"></i>
              </span>
              <span> Pour vous inscrire </span>
            </a>
          </li>
          <li>
            <a class="btn btn-link" href=" {{ route('login') }}">
              <span class="icon">
                <i aria-hidden="true" class="icon-blog"></i>
              </span>
              <span>Connexion</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  </div><!-- /container -->



    <div id="content">
        @yield('content')
    </div>

    <!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">
  <!-- Footer Links -->
  <div class="container text-center text-md-left">
    <!-- Grid row -->
    <div class="row">
      <!-- Grid column -->
      <div class="col-md-4 mx-auto">
        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Mentions légales</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-2 mx-auto">
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
    </div>
    <!-- Grid row -->
  </div>
  <!-- Footer Links -->
  <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Enregistrez vous gratuitement !</h5>
    </li>
    <li class="list-inline-item">
      <a href="{{ route('Inscription') }}" class="btn btn-danger btn-rounded">Cliquez Ici !</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <a href="https://mdbootstrap.com/education/bootstrap/"></a>
  </div>
  <!-- Copyright -->

<!-- Footer -->
</footer>

    @yield('scripts-footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>


>>>>>>> Stashed changes
</body>
</html>
