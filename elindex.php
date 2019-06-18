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
?>
