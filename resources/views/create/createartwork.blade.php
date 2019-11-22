@extends('layout')
@section('create-artwork')
<h2>Créer une oeuvre</h2>


    <form class="d-flex" style="justify-content: space-around;">
    <div class="characteristics d-flex">

        <div class="m-auto">

            <h3>Les caractéristiques de l'oeuvre</h3>

        <div class="inputcreate">
            <label for="validationServer01">Nom de l'oeuvre</label>
            <input type="text" class="form-control" id="validationServer01" placeholder="Entrez le nom de l'oeuvre" value="" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer02">Date de création</label>
            <input type="date" class="form-control" id="validationServer02" placeholder="Entrez la date de création de l'oeuvre" value="">
        </div>

        
        <div class="inputcreate">
            <label for="validationServer03">Hauteur</label>
            <input type="text" class="form-control" id="validationServer03" placeholder="Entrez la hauteur de l'oeuvre" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer04">Largeur</label>
            <input type="text" class="form-control" id="validationServer04" placeholder="Entrez la largeur de l'oeuvre" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer05">Poids</label>
            <input type="text" class="form-control" id="validationServer05" placeholder="Entrez le poids de l'oeuvre" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer05">Matière(s)</label>
            <input type="text" class="form-control" id="validationServer05" placeholder="Entrez la/les matière(s) de l'oeuvre" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer05">Couleur(s)</label>
            <input type="text" class="form-control" id="validationServer05" placeholder="Entrez la/les couleurs de l'oeuvre" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer05">Thème</label>
            <input type="text" class="form-control" id="validationServer05" placeholder="Entrez le thème principal de l'oeuvre" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer05">Auteur</label>
            <input type="text" class="form-control" id="validationServer05" placeholder="Entrez le nom de l'auteur de l'oeuvre" required>
        </div>

        <div class="form-group inputcreate">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Entrez la desciption l'oeuvre"></textarea>
            </div>

            <div class="form-group inputcreate">
            <label for="exampleFormControlFile1">Ajouter une image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>

           
</div>

  {{-- parameters negociation --}}
<div class=" parameter-negociation d-flex flex-column">

        <div class="">
            <h3>Les paramètres de négociation</h3>

        <div class="inputcreate">
            <label for="validationServer01">Prix de vente négociable</label>
            <input type="number" class="form-control" id="validationServer01" placeholder="Entrez le prix de vente" value="" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer02">Prix minimum</label>
            <input type="number" class="form-control" id="validationServer02" placeholder="Entrez le prix minimum de vente" value="" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer03">Nombre de tour</label>
            <input type="number" class="form-control" id="validationServer03" placeholder="Entrez le nombre de tour de négociation" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer04">Durée</label>
            <input type="number" class="form-control" id="validationServer04" placeholder="Entrez la durée de négociation" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer05">Taux de trappe</label>
            <input type="number" class="form-control" id="validationServer05" placeholder="Entrez le taux de trappe" required>
        </div>

        <div class="inputcreate">
            <label for="validationServer05">Nombre de trappe</label>
            <input type="number" class="form-control" id="validationServer05" placeholder="Entrez le nombre de trappe" required>
        </div>
        <button class="btn btn-warning d-block m-auto" type="submit">Valider tous les paramètres</button>
        </div>
</div>
  </form>
 

  

    
@endsection