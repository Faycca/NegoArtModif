<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NegoArt</title>
  {{-- Bootstrap --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  {{-- CSS Main File import --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="background-allart">
{{-- Header --}}
<header>
  <div class="header-contener d-flex justify-content-between ">
    <a href="/"><img class="header-img img-fluid" src="../img/logos/svg/negopricing-logo-pure.svg"
        alt="logo-negopricing"></a>
    <div class="btn-group p-4">
    <a href="/" class=" btn-login btn btn-outline-secondary">
        Se connecter
      </a> 
      <a href="{{ asset('/registr')}}"class= "btn-register btn btn-outline-secondary">Inscription</a>
    </div>
  </div>
</header>
{{-- Navigation --}}
<nav class="main-nav navbar navbar-expand-lg navbar-dark bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
         NOS OEUVRES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Peinture</a>
            <a class="dropdown-item" href="#">Sculpture</a>
            <a class="dropdown-item" href="#">Photographie</a>
            <a class="dropdown-item" href="#">Arts numériques</a>
            <a class="dropdown-item" href="#">Gravures</a>
            <a class="dropdown-item" href="#">Design</a>
            <a class="dropdown-item" href="#">Textiles</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ asset('/art')}}">Parcourir les oeuvres</a>
        </div>
        
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{ asset('/create')}}">CREER UNE OEUVRE</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="{{ asset('/backselfer')}}">HISTORIQUE</a>
      </li> 
    </ul>
  </div>
</nav>
  <main class="ml-3">
        @yield('content')
        {{-- @yield('application') --}}
        @yield('connect')
        @yield('registration')
        @yield('artwork-sculpture')
        @yield('artwork-paint')
        @yield('artwork-textile')
        @yield('allartsworks')
        @yield('gallery')
        @yield('create-artwork')
  </main>

{{-- Footer --}}
<footer class="main-footer text-center" style="margin-top:20px;">
  <div class="legal-declaration">
    <ul class="list-inline d-flex justify-content-around">
      <a class="legal-declaration-link" href="#">
        <li class="list-inline-item">- Mentions Légales -</li>
      </a>
      <a class="legal-declaration-link" href="#">
        <li class="list-inline-item">- Déclaration de confidentialité -</li>
      </a>
      <a class="legal-declaration-link" href="#">
        <li class="list-inline-item">- Politique de confidentialité -</li>
      </a>
    </ul>
  </div>
  <div class="footer-rights">
    <img class="footer-logo img-fluid" src="../img/logos/svg/negopricing-logo-pure.svg" alt="logo de negopricing">
    <span>© Negopricing - Tous droits réservés - 2019</span>
  </div>
</footer>

<script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
@yield('script-registration')
@yield('script-appli')
@yield('script-connect')

<!---Bootstrap--->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>