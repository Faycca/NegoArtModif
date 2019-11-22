@extends('layout')
@section('content')
<div class="connect-page">

        <div class="connect-login">
            <h2>Connexion Client</h2>
            <form class="form-registration d-block registr-mobile ">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Adresse email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse email" required>
                    </div>

                    <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" style="margin-bottom:10px;" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe" required>
                            </div>
                            <button type="submit" class="btn btnspecial">Valider</button>
            </form>
            <p class="text-center mt-5">Votre connexion est limitée à...</p>
            <img src="img/negobody.jpg" alt="" style="margin-top:20px;width:95%;">
        </div>
        
@endsection