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
<p id="uno"></p>
<p id="dos"></p>
<p id="tres"></p>
<p id="cuatro"><?php echo $resjs; ?></p>
<p id="cinco"></p>
<p id="seis"></p>
<!--Este campo modificar a JSON-->
<script type="text/javascript">
    var resphp = '<?php echo $resjs; ?>';
    var a = parseInt(resphp);
    if(a==1){
      document.getElementById("cinco").innerHTML = a+ " es el numero del la base de datos";
    }
    else {
      document.getElementById("cinco").innerHTML = a+ " No nes no es uno de la base de datos";
    }
</script>
<!--Hasta aqui lo JSON -->


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h3>Modificar el intervalo determinado valores:(1,2,3)</h3>
<input type="text" name="valinter"><br>
<input type="submit" name="submit" value="Modificar intervalo" href="javascript:location.reload()"><br>
</form>

<!-- Modal -->
<div class="modal show" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modal Options</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Modal content..</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


</body>
</html>
