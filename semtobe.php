<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

.clockdate-wrapper {
    background-color: #333;
    padding:25px;
    //max-width:350px;
    width:100%;
    text-align:center;
    border-radius:5px;
    margin:0 auto;
    //margin-top:15%;
}
#clock{
    background-color:#333;
    font-family: sans-serif;
    font-size:60px;
    text-shadow:0px 0px 1px #fff;
    color:#fff;
}
#clock span {
    color:#888;
    text-shadow:0px 0px 1px #333;
    font-size:30px;
    position:relative;
    top:-27px;
    left:-10px;
}
#date {
    letter-spacing:10px;
    font-size:14px;
    font-family:arial,sans-serif;
    color:#fff;
}
</style>
<script type="text/javascript">
//var segundovi = 00;
//var segundovf = 59;
var minutosve = new Array();

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
document.getElementById("cuatro").innerHTML = corro;
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
    document.getElementById("dos").innerHTML = control;
    var time = setTimeout(function(){ startTime() }, 500);
  }
  function checkTime(i) {
      if (i < 10) {
          i = "0" + i;
      }
      return i;
  }
  function control (estado){
    if (estado==true){
      document.getElementById("rojov").className = "colorrojo2";
      document.getElementById("amarillov").className = "coloramarillo1";
      document.getElementById("verdev").className = "colorverde1";
    }
    else {
      document.getElementById("rojov").className = "colorrojo1";
      document.getElementById("amarillov").className = "coloramarillo1";
      document.getElementById("verdev").className = "colorverde2";
    }

  }

    //  var res = '<?php echo $result;?>'
      //document.getElementById("dos").innerHTML = res+"Esto es el valor heradado";

</script>
</head>
<body onload="startTime()">
  <?php include("elindex.php"); ?>
  <div id="clockdate">
    <div class="clockdate-wrapper">
      <div id="clock"></div>
      <div id="date"></div>
    </div>
  </div>
<br><br1>
<h3>Resultados:</h3>
<p id="uno"></p>
<p id="dos"></p>
<p id="tres"></p>
<p id="cuatro"></p>
<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
echo "User Has submitted the form and entered this name : <b> $name </b>";
echo "<br>You can use the following form again to enter a new name.";
}
class baseDatos
{
  public $host = "localhost";
  public $dbnombre = "proyecto";
  public $usuario = "postgres";
  public $contra = "slinky123";

  public function consultaDB()
  {
    $dbconn = pg_connect("host=$host dbname=$dbnombre user=$usuario password=$contra") or die('No se ha podido conectar: ' . pg_last_error());
    $query = 'SELECT valor FROM prefusuario WHERE id=1';
    $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
    $line = pg_fetch_array($result);
    $respuestaDB = $line['valor'];
    pg_free_result($result);
    pg_close($dbconn);
  }
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" name="name"><br>

<input type="submit" name="submit" value="Submit Form"><br>

</form>

<!--Imprime y se queda, pasar consulta de php a javascript-->
<!--<?php
/*$dbconn = pg_connect("host=localhost dbname=proyecto user=postgres password=slinky123") or die('No se ha podido conectar: ' . pg_last_error());
// Realizando una consulta SQL
$query = 'SELECT valor FROM prefusuario WHERE id=1';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());


$line = pg_fetch_array($result);
$resjs = $line['valor'];


pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);*/
?>
-->
<script type="text/javascript">
    var resphp = '<?php echo $resjs; ?>';
    var a = parseInt(resphp);
    if(a==1){
      document.getElementById("uno").innerHTML = a+" es el numero del la base de datos";
    }
    else {
      document.getElementById("uno").innerHTML = "No nes no es uno de la base de datos";

    }
</script>
</body>
</html>
