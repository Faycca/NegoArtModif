@extends('layout')
@section('artwork-sculpture')
<h2>sculpture</h2>

{{-- <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form> --}}




        {{-- <li class="media art-group">
          <img src="img/testoeuvre.jpg" class="img-fluid" alt="Responsive image" style="width: 44vw;" >
          <div class="media-body media-test">
            <h5 class="mt-0 mb-1">Tableau euphorique</h5>
          <ul>
            <li>Hauteur: 50cm </li>
            <li>Largeur: 1 mètres</li>
            <li>Poids : 800g </li>
            <li>Matières : peinture acrylique</li>
            <li>Couleurs : bariolée</li>
            <li>Thèmes : lorem</li>
            <li>Descriptif : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam impedit vero provident officia illum assumenda dicta veniam minima eos quasi ratione nihil, obcaecati corporis facilis. Accusantium doloribus maiores autem nam.</li>
            <li>Auteur : Untel </li>
          </ul>
          <a href="{{ asset('/appli')}}" class="btn btn-inscription" style="margin-top:25px;">Négocier cette oeuvre !</a>
          </div>
        </li> --}}
<ul class="list-unstyled">
        <li class="media art-group">
                <img src="img/scu.jpg" class="img-fluid" alt="Responsive image">
                <div class="media-body media-test">
                  <h5 class="mt-0 mb-5">Sculpture</h5>
                 <ul>
                     <li>Hauteur: 3 mètres </li>
                    <br>
                     <li>Largeur: 50cm mètres</li>
                     <br>
                     <li>Poids : 133kg </li>
                     <br>
                     <li>Matières : granit</li>
                     <br>
                     <li>Couleurs : blanche</li>
                     <br>
                     <li>Thèmes : lorem</li>
                     <br>
                     <li>Descriptif : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam impedit vero provident officia illum assumenda dicta veniam minima eos quasi ratione nihil, obcaecati corporis facilis. Accusantium doloribus maiores autem nam.</li>
                     <br>
                     <li>Auteur : Untel </li>
                     <br>
                     <li>Prix : 200 000€ </li>
                 </ul>
                 {{-- <a href="javascript:ouvre_popup('{{ asset('/appli')}}')" class="btn btn-inscription btnspecial" style="margin-top:25px;">Négocier cette oeuvre !</a> --}}
                </div>
              </li>
          </ul> 

<script type="text/javascript">
                  function ouvre_popup(page) {
                   window.open(page,"nom_popup","menubar=no, status=no, scrollbars=no, menubar=no, width=1200, height=1000");
                  }
              </script>



              {{-- <li class="media art-group">
                  <img src="img/textile.jpg" class="img-fluid" alt="Responsive image" style="width: 44vw;">
                  <div class="media-body media-test">
                    <h5 class="mt-0 mb-1">Art Textile</h5>
                   <ul>
                       <li>Hauteur :</li>
                       <li>Largeur :</li>
                       <li>Poids :</li>
                       <li>Matières :</li>
                       <li>Couleurs :</li>
                       <li>Thèmes :</li>
                       <li>Descriptif :</li>
                       <li>Auteur :</li>
                   </ul>
                   <a href="{{ asset('/appli')}}" class="btn btn-inscription" style="margin-top:25px;">Négocier cette oeuvre !</a>
                  </div>
                </li> --}}
      
               
@endsection