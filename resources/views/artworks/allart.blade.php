@extends('layout')
@section('allartsworks')

<h2>Toutes les oeuvres</h2>

<div class="d-flex" style="flex-wrap:wrap">

        <a href="{{ asset('/textile')}}" class="">
            <div class="containerart">
            <div></div>
            <img src="img/textile.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
            <div class="middle">
            <div class="textart">Textile</div>
            </div>
            </div>
        </a>

        <a href="{{ asset('/sculpture')}}" class="">
            <div class="containerart">
            <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
            <div class="middle">
            <div class="textart">Sculpture</div>
            </div>
            </div>
        </a>

        <a href="{{ asset('/paint')}}" class="paint">
            <div class="btn btn-warning text-center d-block m-auto artworknegocing">Oeuvre à négocier !</div>
            <div class="containerart">
            <img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
            <div class="middle">
            <div class="textart">Peinture</div>
            </div>
            </div> 
        </a>


    <div class="containerart">
            <img src="img/textile.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                <div class="middle">
                <div class="textart">Textile</div>
                </div>
        </div>
    
        <div class="containerart">
            <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                <div class="middle">
                 <div class="textart">Sculpture</div>
                 </div>
        </div>
    
        <div class="containerart">
            <img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                <div class="middle">
                <div class="textart">Peinture</div>
                </div>
        </div>

        <div class="containerart">
                <img src="img/textile.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                    <div class="middle">
                    <div class="textart">Textile</div>
                    </div>
            </div>
        
            <div class="containerart">
                <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                    <div class="middle">
                     <div class="textart">Sculpture</div>
                     </div>
            </div>
        
            <div class="containerart">
                <img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                    <div class="middle">
                    <div class="textart">Peinture</div>
                    </div>
            </div>

            <div class="containerart">
                    <img src="img/textile.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                        <div class="middle">
                        <div class="textart">Textile</div>
                        </div>
                </div>
            
                <div class="containerart">
                    <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                        <div class="middle">
                         <div class="textart">Sculpture</div>
                         </div>
                </div>
            
                <div class="containerart">
                    <img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                        <div class="middle">
                        <div class="textart">Peinture</div>
                        </div>
                </div>

                <div class="containerart">
                        <img src="img/textile.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                            <div class="middle">
                            <div class="textart">Textile</div>
                            </div>
                    </div>
                
                    <div class="containerart">
                        <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                            <div class="middle">
                             <div class="textart">Sculpture</div>
                             </div>
                    </div>
                
                    <div class="containerart">
                        <img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                            <div class="middle">
                            <div class="textart">Peinture</div>
                            </div>
                    </div>

                    <div class="containerart">
                            <img src="img/textile.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                                <div class="middle">
                                <div class="textart">Textile</div>
                                </div>
                        </div>
                    
                        <div class="containerart">
                            <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                                <div class="middle">
                                 <div class="textart">Sculpture</div>
                                 </div>
                        </div>
                    
                        <div class="containerart">
                            <img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
                                <div class="middle">
                                <div class="textart">Peinture</div>
                                </div>
                        </div>



{{-- <img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
<img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-rounded img-responsive allimg">
<img src="img/textile.jpg" alt="Bootstrap" class="img-thumbnail img-responsive allimg">
<img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
<img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-rounded img-responsive allimg">
<img src="img/textile.jpg" alt="Bootstrap" class="img-thumbnail img-responsive allimg"> 
<img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
<img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-rounded img-responsive allimg">
<img src="img/textile.jpg" alt="Bootstrap" class="img-thumbnail img-responsive allimg">
<img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
<img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-rounded img-responsive allimg">
<img src="img/textile.jpg" alt="Bootstrap" class="img-thumbnail img-responsive allimg"> 
<img src="img/scu.jpg" alt="Bootstrap" class="img-circle img-responsive allimg">
<img src="img/testoeuvre.jpg" alt="Bootstrap" class="img-rounded img-responsive allimg">
<img src="img/textile.jpg" alt="Bootstrap" class="img-thumbnail img-responsive allimg">  --}}
mysql -u phpmyadmin -p
use negoartdemo

N° int
title varchar(255)
picture string 255
date
Hauteur[height] => m, cm, mm   int
Largeur[width] => m, cm, mm   int
Poids[weigth] => kg, g, mg     int
Matières[materials]            string
Couleurs[color]          string
Thèmes[theme]                string
Descriptif[description]: string text
Auteur[author]: string

Prix de vente négociable[selling price] int
Prix minimum[minimum price] int
Nombre de tour[number tours]: int
Durée int minutes[time]
Taux de trappe[test rate] int %
Nombre de trappe[number test] int

</div>
@endsection
