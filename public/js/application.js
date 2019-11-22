let valid = document.getElementById("valid");
let card = document.getElementById("confirm");
let back = document.getElementById("back");
let confirm = document.getElementById("conf");
let negoweb = document.getElementById("app");
let fields = document.getElementsByClassName("field");
//let open = document.getElementById("open");
let allparam = document.getElementById("containerparam");
let ixi = document.getElementById("ixi");
let appli = document.getElementById("theapplinego");
let exyt = document.getElementById("exyt");
//let well = document.getElementById("well");
let priceini = document.getElementById("priceini");
let divini = document.getElementById("divini");
let validaction = document.getElementById("validaction");
let accept = document.getElementById("accept");
let refus = document.getElementById("refus");
let pricewant = document.getElementById("pricewant");
let visibbutton = document.getElementById("valprop");
let yesorno = document.getElementById("yesorno");
let stop = document.getElementById("stop");
let thenego = document.getElementById("thenego");
let theEND = document.getElementById("theEND");
let titleart = document.getElementById("title-h3");
let tablenego = document.querySelector(".tableau");
let pomodoroapp = document.getElementById("pomodoro-app");
let nbtours = document.getElementById("titre_nbTour");

//send DATA//
let priceshow =document.getElementById("validationCustom01");//prix initial
let trapshow = document.getElementById("validationCustom02");//trappes
let centshow = document.getElementById("validationCustom03");//trappe %
let tourshow = document.getElementById("validationCustom04");//nombre de tour
let priceminshow = document.getElementById("validationCustom05");//prix minimum de vente
let timeshow = document.getElementById("validationCustom06");//le temps
let actionshow = document.getElementById("validationCustom07");//input

//reception DATA //
let showcount = document.getElementById("count");///le count du tableau
let showprice = document.getElementById("showprice");//prix initial
let showbuy = document.getElementById("showbuy");//acheteur
let showwant = document.getElementById("showwant");//prix proposé
let showtour = document.getElementById("showtour");//nombre de tour
let showrab = document.getElementById("showrab");// rabais
let showtime = document.getElementById("minutes");//timer
let xprop = document.getElementById("xprop");// value prop (25000)

// array empty//
let tablefind = [];

//let nbtrap = trapshow.value;

let nbr = 2500; // remplacer par l'algo de Philippe
let tableHidden = document.getElementById('table-hidden');
let boxInfo = document.getElementById('allheaderelements');
let acceptNEGO = document.getElementById("acceptNEGO");

/////validation parameters////
function checkAllValid()
{
    let allValid = true;
    for(let i=0; i<fields.length;i++)
    {
        if(fields[i].validity.valueMissing)
        {
            allValid = false;
        }
    }
    return allValid;
}

function forCard(event) {

    if(checkAllValid())
    {
        event.preventDefault();
        card.style.display = "flex";
        valid.style.display ="none";
    }else{
        alert("Veuillez remplir TOUS les champs du formulaire pour valider vos paramètres.")
    }
}

///retour///
function returnParam() {
    card.style.display = "none";
    valid.style.display= "flex";
}
///ouvrir les paramètres///
function openParam() {
    allparam.style.display = "initial";

}
///confirmation des paramètres///
 function closeParam() {
    // allparam.style.display = "none";
    // card.style.display = "none";
    appli.style.display = "initial";
    //open.style.display = "none";
    //well.style.display = "none";
    divini.style.display = "initial";
    titleart.style.display = "block";
    tablenego.style.display = "initial";
    confirm.style.display = "none";
    pomodoroapp.style.display = "flex";
    nbtours.style.display= "block";
    console.log(trapshow.value + " trappes");
    console.log(centshow.value + " % du prix minimum");
    console.log(priceminshow.value + " prix minimum");
    console.log(priceshow.value*centshow.value/100 + " prix de la trappe");
    console.log(priceshow.value+"/"+centshow.value);
    console.log(priceshow.value + " prix initial");
    //envoie de données//

    priceini.textContent = priceshow.value;
    showcount.textContent = tourshow.value;
    showtime.textContent = timeshow.value;

 }


///fermeture de l'application///
function closeWindow() {
    allparam.style.display = "none";
    card.style.display = "none";
}

/// incrémentation du chiffre / nombre de tour///
let count = 0;
let list = document.querySelector('tr');
list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'TD'){
        ev.target.classList.toggle('checked');
    }
 }, false);

function action() {

    /////////////ajout list////////////////
    var tableau = document.getElementById("theTABLE");
    var tr = document.createElement("TR");
    var actionshow = document.getElementById("validationCustom07").value;

    if (actionshow === ''){
        alert("Veuillez entrer une proposition !");
        affiche.style.display = "none";

    } else {
        count++
        tableau.appendChild(tr);

    ////////////trappes %////////////

   if (Number(actionshow)<= priceshow.value*centshow.value/100) {

        alert("Cette proposition n'est pas sérieuse il ne vous reste plus que "+"[ "+ trapshow.value +" ] chance avant que la négociation soit annulée");
        trapshow.value--;
        count --;
        console.log( +" nombre de trappes");

        if (trapshow.value < 0){
        window.location.reload();

    }
    } else {

     ////value want > last value////
     let discount = Math.round((priceini.textContent - nbr)*100/priceini.textContent);
     let last = tablefind[tablefind.length -1];
     tablefind.push(Number(actionshow));
     console.log(last + " dernier prix acheteur proposé");

     if (Number(actionshow) < last )
         tablefind.pop(Number(actionshow));

     if (count > 0) {
        if (Number(actionshow) <= last ) {
            alert("Veuillez faire une proposition supérieure à l'ancienne !");
            count --;

         } else {

    document.getElementById("validationCustom07").value = "";
    document.getElementById("validationCustom01").value = "";

    ////////////////////////TD/////////////////////////
    var valueinput = document.createTextNode(Number(actionshow));
    var txt = document.createTextNode(count);
    var tdone = document.createElement("TD");
    var tdthree = document.createElement("TD");
    var tdfour = document.createElement("TD");
    var want = document.createTextNode(nbr); //// remplacer nbr par la variable de Philippe à rajouter
    var tdfive = document.createElement("TD");
    var sold = document.createTextNode(discount + " %");

    //////////////////////DIV in TD////////////////

    var divone = document.createElement("DIV");
    var divthree = document.createElement("DIV");
    var divfour = document.createElement("DIV");
    var divfive = document.createElement("DIV");

    //////////////////TD class///////////////////


    tr.className = "trTABLE";
    tdone.className = "blockall countered";//count
    tdthree.className = "blockall buyed";//acheteur
    tdfour.className = "blockall wanted";//prix proposé
    tdfour.id = "priceprop";
    tdfive.className = "blockall solded";//rabais %

    ///////////// DIV class////////////////////////


    divone.className ="cell countone";
    divthree.className ="cell buythree";
    divfour.className ="cell wantfour";
    divfour.id = "xprop";
    divfive.className ="cell soldone";

    ////////////TD appendChild////////////////
    tr.appendChild(tdone);//count
    tr.appendChild(tdthree);
    tr.appendChild(tdfour);//prix proposé
    tr.appendChild(tdfive);//rabais %

    //////DIV appendChild//////////////

    divone.appendChild(txt);//ini
    tdone.appendChild(divone);
    divthree.appendChild(valueinput);//count
    tdthree.appendChild(divthree);
    divfour.appendChild(want);//prixproposé
    tdfour.appendChild(divfour);
    divfive.appendChild(sold);//rabais %
    tdfive.appendChild(divfive);

    //////button invisible/////

    visibbutton.style.display = "none";
    yesorno.style.display = "flex";

    ///////decrementation compteur//////

     console.log(count +" compteur");

    //  ////////////loader/////////////
     const aleatoire = Math.floor(Math.random() * 4000) + 5000;

     loader.style.visibility="visible";
     loader.style.opacity ="1";
     validaction.style.display="none";
     tableau.style.display="none";
     yesorno.style.display="none";

     if(showcount.textContent < 0){
        stop.style.display="flex";
    }
    else{
       stop.style.display ="none";
       }
       
     setTimeout(function(){
         showcount.textContent--;
         tableau.style.display = "";
         validaction.style.display="";
         loader.style.visibility = "";
         loader.style.opacity ="";
         yesorno.style.display="flex";
     }, aleatoire);


    }
   }
  }
 }
}
////////conditions//////////////

function acceptNego() {
alert("Êtes-vous sur de vouloir accepter l'offre de _ _ _ euros");
// + "[" + negoprice + "]" + à mettre entre le mot offre et euro Philippe
}


function refusalNego() {
    visibbutton.style.display ="flex";
    yesorno.style.display = "none";
}
///les boutons///
function acceptFinal() {
    alert("Êtes-vous sur de vouloir accepter l'offre de _ _ _ euros");
    // + "[" + negoprice + "]" + à mettre entre le mot offre et euro Philippe
}

function refusalFinal() {
    window.close();

}
valid.addEventListener("click", forCard);
back.addEventListener("click", returnParam );
//open.addEventListener("click", openParam);
confirm.addEventListener("click", closeParam);
ixi.addEventListener("click", closeWindow);
accept.addEventListener("click", acceptNego);
refus.addEventListener("click", refusalNego);
validaction.addEventListener("click", action);
acceptNEGO.addEventListener("click", acceptFinal);
theEND.addEventListener("click", refusalFinal);
exyt.addEventListener("click", refusalFinal);

