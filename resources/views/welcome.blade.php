<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NegoArt</title>

       <!-- Fonts -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">

       <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Cormorant+Infant&display=swap" rel="stylesheet"> 
       <link href="https://fonts.googleapis.com/css?family=Asap&display=swap" rel="stylesheet"> 

       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">

    </head>
    <body>
       
        <div class="flex-center position-ref full-height nav-verytop">
                <a class="navbar-brand d-flex" href="/" style="justify-content:center;margin-top: 7px;"><img src="" alt=""></a>
             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/homing') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 

                {{-- navbar top --}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-one">
                <a href="{{ asset('/connexion')}}" class="img-connexion "><img src="img/icon/user.png" alt=""></a>
                <div class="">
                        <ul class="navbar-nav">
                      <li class="nav-item active connect-block">
    
                      </li> 
                      <li class="nav-item active connect-block" style="margin-top: -5px;">
                            <a class="navbar-brand connect-nav" href="{{ asset('/connexion')}}">Connexion Vendeur</a>
                      </li> 
                  </ul>
            </nav>
        </div>

            {{-- big title --}}
            <a href="/" class="NegoArt"> 
                <div class="content">
                <div class="title m-b-md">
                    Nego Art
                </div>
                </div>
            </a>
           
            <!--///navbar-bottom//-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav-me">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="backgroundcolor:white;"></span>
                </button>

                     {{-- search --}}
                     {{-- <form class="form-inline my-2 my-lg-0" style="left:-4px;">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recherche" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <button class="input-group-text btn btn-outline-success my-2 my-sm-0 btnspecial" id="basic-addon2" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                          </div> 
                      </form> --}}

                      {{-- navbar oeuvre --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                          <a class="nav-link navAll" href="{{ asset('/')}}">Accueil<span class="sr-only">(current)</span></a>
                      </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle navAll" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Oeuvres
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: 7px;">
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

                        {{-- navbar --}}
                      {{-- <li class="nav-item active">
                          <a class="nav-link navAll" href="{{ asset('/rules')}}">Comment ça marche ?<span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item active">
                          <a class="nav-link navAll" href="{{ asset('/rules')}}">Règles et conditions d'utilisation<span class="sr-only">(current)</span></a>
                      </li> --}}

                      {{-- navbar Plus--}}
                      {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle navAll" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Plus
                          </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: 7px;">
                          <a class="dropdown-item" href="#">Nous contacter</a>
                          <a class="dropdown-item" href="#">NegosDevis</a>
                          <a class="dropdown-item" href="#">Nos partenaires</a>
                          <a class="dropdown-item" href="#">Qui sommes-nous ?</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="">Besoin d'aide ?</a>
                         </div>
                     </li> --}}
                 </ul>
            </div>
        </nav>

        <div class="second-body">
            @yield('content')
            {{-- @yield('application') --}}
            @yield('connect')
            @yield('registration')
            @yield('artwork-sculpture')
            @yield('artwork-paint')
            @yield('artwork-textile')
            @yield('allartsworks')
            @yield('gallery')
            
        </div>

        <footer>
          <div class="footer-content">
              <div class="infos-footer f-one">
                <h4 class="hjustice" style="width:90px;">Juridique</h4>
                <a href="{{ asset('/rules')}}" class="footer-web">Conditions d'utilisation</a>
                <a href="" class="footer-web">Mentions légales</a>
              </div>

              <div class="infos-footer f-two">
                <h4 class="hhelp" style="width:48px;">Aide</h4>
                <a href="" class="footer-web">FAQ</a>
                <a href="" class="footer-web">Guide d'utilisation</a>
                <a href="" class="footer-web">Pourquoi négocier ?</a>
                <a href="/" class="footer-web">Accueil</a>
              </div>

              <div class="infos-footer f-three">
                <h4 class="hbox" style="width:99px;">Entreprise</h4>
                <a href="" class="footer-web">Nous contacter</a>
                <a href="" class="footer-web">Nos partenaires</a>
                <a href="" class="footer-web">NegoPricing</a>
                <a href="" class="footer-web">Qui sommes nous ?</a>
              </div>
          </div>
        </footer>
        <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
        @yield('script-registration')
        @yield('script-appli')
        @yield('script-connect')
    </body>
    <!---Bootstrap--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
