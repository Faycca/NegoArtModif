
let bcfull = document.getElementById("bcfull");
let final = document.getElementById("final");
let container = document.getElementById("container");
let affiche = document.getElementById("afficheLoader");

var pomodoro = {
    started : false,
    minutes : 0,
    seconds : 0,
    count : 0,
    fillerHeight : 0,
    fillerIncrement : 0,
    interval : null,
    countDom : null,
    minutesDom : null,
    secondsDom : null,
    fillerDom : null,

    init : function(){
      var self = this;
      this.minutesDom = document.querySelector('#minutes');
      this.timerDom = document.getElementById('timer');
      this.countDom = document.querySelector('#count');
      this.secondsDom = document.querySelector('#seconds');
      this.interval = setInterval(function(){
          self.intervalCallback.apply(self);
      }, 1000);

      function startCon(){
          self.startWork.apply(self);
      };
      confirm.addEventListener("click", startCon);


      document.querySelector('#count').onclick = function(){
          self.startCount.apply(self);
      };

    },
    resetVariables : function(mins, secs, started, compteur){
    this.minutes = mins;
    this.seconds = secs;
    this.started = started;
    this.count = compteur;
    },
    startWork: function() {
    this.resetVariables(this.minutesDom.innerHTML, this.seconds = 0, true);
        console.log(this.minutesDom.innerHTML + " minutes");
    },
    //changement front(minuteur) selon le temps//
    dangerMinuteur: function(){

        this.timerDom.style.color = "white";
        container.style.background = "#ab0000";
        bcfull.style.display ="flex";
    },
    greenMinuteur: function(){

    this.timerDom.style.color = "white";
    container.style.background = "#34b800";
    },
    blueMinuteur: function(){

    this.timerDom.style.color = "white";
    container.style.background = "#010970";
    },
    stopMinuteur: function () {
        stop.style.display= "flex";
        thenego.style.display = "none";
        tableHidden.style.display = "none";
        yesorno.style.display="none"
        affiche.style.display = "none";
    },
    //////////////Conditions timer////////////////


    stopTimer : function(){

        this.countDom.textContent --
        if( this.countDom.textContent < 0){
            this.countDom.textContent = 0;
        }
    },
    toDoubleDigit : function(num){
    if(num < 10) {
        return "0" + parseInt(num, 10);
    }
    return num;
    },
    updateDom : function(){
    this.minutesDom.innerHTML = this.toDoubleDigit(this.minutes);
    this.secondsDom.innerHTML = this.toDoubleDigit(this.seconds);

    },
    intervalCallback : function(){
    if(!this.started) return false;
    if(this.seconds == 0) {
        if(this.minutes == 0) {
        this.timerComplete();
        return;
        }
        this.seconds = 59;
        this.minutes--;
    } else {
        this.seconds--;
    }

    if(this.minutes >= 3){

        this.greenMinuteur();

    }else if(this.minutes >= 1){

        this.blueMinuteur();

    } else if(this.minutes < 1 ) {
        this.dangerMinuteur();
    }
    if(this.minutes == 0 ) {
        if (this.seconds ==0) {
            this.stopMinuteur();
        }
    }

    this.updateDom();
    },
    timerComplete : function(){
    this.started = false;
    this.fillerHeight = 0;
    }
};
window.onload = function(){
    pomodoro.init();
    };


