@extends('layout')
@section('artwork-textile')
<h2>textile</h2>

<ul class="list-unstyled">
        <li class="media art-group">
                <img src="img/textile.jpg" class="img-fluid" alt="Responsive image">
                <div class="media-body media-test">
                  <h5 class="mt-0 mb-5">Textile</h5>
                 <ul>
                     <li>Hauteur: 50cm</li>
                    <br>
                     <li>Largeur: 50cm </li>
                     <br>
                     <li>Poids : 300g </li>
                     <br>
                     <li>Matières : tissu</li>
                     <br>
                     <li>Couleurs : rouge, blanc noir</li>
                     <br>
                     <li>Thèmes : lorem</li>
                     <br>
                     <li>Descriptif : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam impedit vero provident officia illum assumenda dicta veniam minima eos quasi ratione nihil, obcaecati corporis facilis. Accusantium doloribus maiores autem nam.</li>
                     <br>
                     <li>Auteur : Untel </li>
                     <br>
                     <li>Prix : 2000€ </li>
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
@endsection