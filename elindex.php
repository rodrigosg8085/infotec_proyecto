<?php
$dbconn = pg_connect("host=localhost dbname=proyecto user=postgres password=slinky123") or die('No se ha podido conectar: ' . pg_last_error());
// Realizando una consulta SQL
$query = 'SELECT valor FROM prefusuario WHERE id=1';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());


$line = pg_fetch_array($result);
$resjs = $line['valor'];


pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);




if(isset($_POST['submit']))
{
$valor_int_mod = $_POST['valinter'];
$valor_int_mod = (int) $valor_int_mod;

  switch ($valor_int_mod) {
      case "1":
          echo "Valor 1";
          $dbconn = pg_connect("host=localhost dbname=proyecto user=postgres password=slinky123") or die('No se ha podido conectar: ' . pg_last_error());
          // Realizando una consulta SQL
          $query = "UPDATE prefusuario SET valor='1' WHERE id=1";

          $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
          pg_free_result($result);

          // Cerrando la conexión
          pg_close($dbconn);
          
          break;
      case "2":
          echo "Valor 2|";
          $dbconn = pg_connect("host=localhost dbname=proyecto user=postgres password=slinky123") or die('No se ha podido conectar: ' . pg_last_error());
          // Realizando una consulta SQL
          $query = "UPDATE prefusuario SET valor='2' WHERE id=1";

          $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
          pg_free_result($result);

          // Cerrando la conexión
          pg_close($dbconn);
          break;
      case "3":
          echo "Valor 3 ";
          $dbconn = pg_connect("host=localhost dbname=proyecto user=postgres password=slinky123") or die('No se ha podido conectar: ' . pg_last_error());
          // Realizando una consulta SQL
          $query = "UPDATE prefusuario SET valor='3' WHERE id=1";

          $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
          pg_free_result($result);

          // Cerrando la conexión
          pg_close($dbconn);
          break;
      default:
          echo $valor_int_mod."no entra en valor ";
          break;
}
}

?>
