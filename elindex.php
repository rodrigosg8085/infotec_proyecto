<?php
function consultaBD(){
  $dbconn = pg_connect("host=localhost dbname=proyecto user=postgres password=slinky123") or die('No se ha podido conectar: ' . pg_last_error());
  $query = "SELECT valor FROM prefusuario WHERE id='1'";
  $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
  $line = pg_fetch_array($result);
  $resjs = $line['valor'];
  pg_free_result($result);
  pg_close($dbconn);
}

function modificarDB($valorEnvio){
  $dbconn = pg_connect("host=localhost dbname=proyecto user=postgres password=slinky123") or die('No se ha podido conectar: ' . pg_last_error());
  $query = "UPDATE prefusuario SET valor='$valorEnvio' WHERE id=1";
  $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
  pg_free_result($result);
  echo "Correcto $valorEnvio";
  pg_close($dbconn);
}

function retornarJSON(){
  $arr = array('a' => 'holitas');

  echo json_encode($arr);
  echo "$arr";
}

consultaBD();
retornarJSON();

if(isset($_POST['submit']))
{
$valor_int_mod = $_POST['valinter'];
$valor_int_mod = (int) $valor_int_mod;

  switch ($valor_int_mod) {
      case "1":
          modificarDB(1);
          break;
      case "2":
          modificarDB(2);
          break;
      case "3":
          modificarDB(3);
          break;
      default:
          echo $valor_int_mod."Valor fuera de rango (1,2,3)";
          break;
}
}

?>
