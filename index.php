<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="elindex.css">

</head>
<body onload="startTime();impriphp();">
<?php include("elindex.php"); ?>
<script src="elindex.js"></script>

<!--<div class="grid-menu-base">
  <div class="menuverde"><img src="/img/logo.png" alt="Logo infotec" class="regtamlogo"></div>
  <div class="menuamarillo"><h1>Simulador Semáforo Av. Tláhuac</h1></div>
  <div class="menurojo"><img src="/img/logo2.png" alt="Logo Empresa" class="regtamlogo"></div>

</div>-->
<!--<object data="semtobe.php" style="width: 100%; height: 900px;"></object>-->
<audio id="audio" controls>
<source type="audio/mp3" src="/BEEP_FM.mp3">
</audio>

<div id="clockdate">
  <div class="clockdate-wrapper">
    <div id="clock"></div>
    <div id="date"></div>
  </div>
</div>

<br>
<div class="semfarov">
<div class="gris1" id="rojov"></div>
<div class="gris2" id="amarillov"></div>
<div class="gris3" id="verdev"></div>
<div style="clear:both"></div>

</div>
<div class="semfape">
<div class="gris1" id="rojop"></div>
<div class="gris3" id="verdep"></div>
<div style="clear:both"></div>

</div>
<div style="clear:both"></div>
<br>
<br><br>
<h3>Resultados:</h3>
<p id="uno"></p>
<p id="dos"></p>
<p id="tres"></p>
<p id="cuatro"><?php echo $resjs; ?></p>


<p id="cinco"></p>

<script type="text/javascript">
    var resphp = '<?php echo $resjs; ?>';
    var a = parseInt(resphp);
    if(a==1){
      document.getElementById("cinco").innerHTML = a+" es el numero del la base de datos";
    }
    else {
      document.getElementById("cinco").innerHTML = "No nes no es uno de la base de datos";

    }
</script>
</body>
</html>
