<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="elindex.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body onload="startTime()">
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
<p id="uno">1</p>
<p id="dos">2</p>
<p id="tres">3</p>
<p id="cuatro">4</p>
<p id="cinco">5</p>
<p id="seis">6</p>
<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h3>Modificar el intervalo determinado valores:(1,2,3)</h3>
<input type="text" name="valinter"><br>
<input type="submit" name="submit" value="Modificar intervalo" href="javascript:location.reload()"><br>
</form>


</body>
</html>
