var minutosve = new Array();
/*function impriphp(){

  var resphp = '<?php echo $resjs; ?>';
  var a = parseInt(resphp);
  if(a==1){
    document.getElementById("cinco").innerHTML = a+" es el numero del la base de datos";
  }
  else {
    document.getElementById("cinco").innerHTML = a+" No nes no es uno de la base de datos";

  }
}*/
function leerdatosPHP(){
  var ok = new Array('<? echo "$arr"; ?>');
  document.getElementById("seis").innerHTML = ok;
}



function contructor(minu){
  var relleno = 0;
  var corro = false;
  //var contador = 9;

    for(var i=0;i<30;i++){
        minutosve.push(relleno);
        var temporal = minutosve[i];
          relleno++;
          relleno++;
          if (minu == temporal){
            corro =true;
          }
        }
document.getElementById("uno").innerHTML = corro;
return corro;
}
function startTime() {
    var control;
    var estado;
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    var dia = today.getDay();
    //Add a zero in front of numbers<10
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + " : " + min + " : " + sec;
    control = contructor(min);
    //doblecont = controladord(control,sec);
    controlador(control,sec);
    leerdatosPHP();
    document.getElementById("dos").innerHTML = control;
    var time = setTimeout(function(){ startTime() }, 500);
  }

  function checkTime(i) {
      if (i < 10) {
          i = "0" + i;
      }
      return i;
  }

  function controlador (control,sec){

    if (control==true){
      document.getElementById("rojov").className = "gris1";
      document.getElementById("verdev").className = "colorverde2";
      document.getElementById("rojop").className = "colorrojo2";
      document.getElementById("verdep").className = "gris3";
      if (sec == 57 || sec== 59){
        document.getElementById("rojov").className = "gris1";
        document.getElementById("verdev").className = "gris3";
        document.getElementById("amarillov").className = "coloramarillo2";
      }
      else if (sec == 56 || sec == 58) {
        document.getElementById("rojov").className = "gris1";
        document.getElementById("verdev").className = "gris3";
        document.getElementById("amarillov").className = "gris2";
      }
      document.getElementById("tres").innerHTML = control;

    }
    else if (control==false){
      document.getElementById("amarillov").className = "gris2";
      document.getElementById("rojov").className = "colorrojo2";
      document.getElementById("verdev").className = "gris3";
      if (sec == 51 || sec == 53 || sec == 55 || sec == 57 || sec== 59 ){
        document.getElementById("verdep").className = "gris3";
        var audio = document.getElementById("audio");
        audio.play();
      }
      else {
        document.getElementById("rojop").className = "gris1";
        document.getElementById("verdep").className = "colorverde2";
      }


    }

  }
