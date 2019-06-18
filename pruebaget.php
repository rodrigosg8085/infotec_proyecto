<html>
<head>
</head>
<body>

  <p>Introdusca el intervalo de encendido tanto para (vehiculos y peatones),[1,2,3]:</p>

  <input id="numb">

  <button type="button" onclick="contructor()">Crear contructor</button>

  <p id="retro"></p>

  <script>
  var minutosve=new Array();
  function contructor() {
    var x, text;
    x = document.getElementById("numb").value;
    switch (x) {
          case '1':
            var tempo = 0;

    for(var i=0;i<30;i++)
    {
        minutosve.push(tempo);
        tempo++;
        tempo++;
    }
    for(var i=0; i<30;i++){
        var temporal = minutosve[i]
        if(temporal==30)

        text = "Valor encontrado que es: "+temporal;
    }

    //document.write(miArray);

        /*  var nuevoArray = new Array(1);
  //Bucle para meter en cada posición otros array de 10
          for(var i=0; i<29; i++) {
              nuevoArray[i] = new Array(29);
              }



//imprimir
        for(var i=0; i<2; i++) {
        //Bucle que recorre el array que está en la posición i
        for(var j=0; j<29; j++) {
            document.write(nuevoArray[i][j]+' ');
        }
}*/

            break;
          case '2':
            text = "correcto";

            break;
          case '3':
            text = "correcto";
            break;
          default: text= "Introduce valor del (1, 2, 3)";

        }


    /*if (isNaN(x) || x < 1 || x > 3) {
      text = "No correcto";
    } else {
      text = "Correcto";
    }*/
    document.getElementById("retro").innerHTML = text;
  }
/*    switch (interv) {
      case 1:
      var nuevoArray = new Array(2);
      nuevoArray[0] = new Array(2);
      nuevoArray[1] = new Array(2;
        nuevoArray[0][0] = 25;
  nuevoArray[0][1] = 12;
  nuevoArray[1][0] = 34;
  nuevoArray[1][1] = 6;
  for(var i=0; i<1; i++) {
      //Bucle que recorre el array que está en la posición i
      for(var j=0; j<1; j++) {
          document.write(nuevoArray[i][j]);
      }
  }
        break;
      case 2:

        break;
      case 3:

        break;
      default:

    }*/

  </script>
</script>
</body>
</html>
