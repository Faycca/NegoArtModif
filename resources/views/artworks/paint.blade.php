@extends('layout')
@section('artwork-paint')
<h2>Peinture Euphorique</h2>

<ul class="">
        <li class="media art-group">
                <img src="img/testoeuvre.jpg" class="img-fluid" alt="Responsive image">
                <div class="media-body media-test">
                  <h5 class="mt-0 mb-5">Peinture Euphorique</h5>
                 <ul>
                     <li>Hauteur: 1 mètre </li>
                    <br>
                     <li>Largeur: 50cm mètres</li>
                     <br>
                     <li>Poids : 700kg </li>
                     <br>
                     <li>Matières : gouache</li>
                     <br>
                     <li>Couleurs : bariolées</li>
                     <br>
                     <li>Thèmes : lorem</li>
                     <br>
                     <li>Descriptif : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam impedit vero provident officia illum assumenda dicta veniam minima eos quasi ratione nihil, obcaecati corporis facilis. Accusantium doloribus maiores autem nam.</li>
                     <br>
                     <li>Auteur : Untel </li>
                     <br>
                     <li>Prix : 3000€ </li>
                 </ul>
                 <a href="javascript:ouvre_popup('{{ asset('/appli')}}')" class="btn btn-inscription btnspecial" style="margin-top:25px;">Négocier cette oeuvre !</a>
                </div>
              </li>
</ul>
<script type="text/javascript">
    function ouvre_popup(page) {
     window.open(page,"nom_popup","menubar=no, status=no, scrollbars=no, menubar=no");
    }
</script>


@endsection
