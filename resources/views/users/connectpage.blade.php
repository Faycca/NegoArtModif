@extends('layout')
@section('connect')

<div class="connect-page">

        <div class="connect-login">
            <h2>Connexion vendeur</h2>
            <form class="form-registration d-block registr-mobile ">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Adresse email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse email" required>
                    </div>

                    <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" style="margin-bottom:10px;" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <a href="{{ asset('/backselfer')}}" class="btn btn-inscription btnspecial" style="margin-top:25px;">Négocier cette oeuvre !</a>
            </form>

            <img src="img/imgregistr.jpg" alt="" style="margin-top:20px;width:95%;">
        </div>

        {{-- <hr class="hr-connect d-block"> --}}

        {{-- <div class="card-inscription">
        <h2 class="card-title">Inscription</h2>
        <div class="card m-auto card-regi-picture" style="text-align:center;">
            <img src="img/imgregistr.jpg" class="card-img-top m-auto" style="width:100%" alt="...">
            <div class="card-body">
              <p class="card-text">Vous êtes amateur d'art, galleriste ou artiste indépendant ? 
                <hr> 
                Vous aimeriez acheter ou vendre des oeuvres en négociant leur prix ?
                <hr>
                Alors NegoArt est fait pour vous !
                <hr>
                Grâce à notre application, négociez sereinement et en toute securité !
              </p>
              <a href="{{ asset('/registr')}}" class="btn d-block m-auto btn-inscription btnspecial">Je m'inscris !</a>
            </div>
          </div>
        </div> --}}
</div>
@endsection

@section('script-connect')
<script type="text/javascript" src="{{ asset('js/connect.js') }}" defer></script>
@endsection