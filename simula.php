<html>
<title>Simulación</title>
<meta charset="utf-8">

<head>
<style>
body{
  background-color: white;
}
.piso{
  position: relative;
   height: 250px;
   width: 100%;
   padding: 0px;
   background-color: #1F2D3D;
   top: 160px;
   border-top: 0px transparent;
   z-index: -50;
}
.señales{
 box-shadow:
 5em 8em 0 0 white,
 15em 8em 0 0 white,
 25em 8em  0 0 white;
 width: 5em;
 height: 1em;
 top: 65px;
 z-index: 50;
}
.paso{

  width: 100px;
  height: 20px;
  background-color: black;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count:infinite;
  z-index: 50;
}
@keyframes example {
  0%   {background-color:white; left:0px; top:285px;}
  25%  {background-color:white; left:320px; top:285px;}
  50%  {background-color:white; left:640px; top:285px;}
  75%  {background-color:white; left:960px; top:285px;}
  100% {background-color:white; left:1280px; top:285px;}
}
</style>

</head>
<body>
<form>
  <input type="button" onclick="cambiocamina()" value="Activar Función">
</form>
<div class="sol"></div>
<!--<div class="señales"><div>-->
<div id="idpiso" class=""></div>

<div class="piso"></div>
<script>
function cambiocamina() {
  var div = document.getElementById('idpiso');
div.className = "paso";
}
</script>


</body>
</html>
