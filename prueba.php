<!DOCTYPE html>
<html>
<head>

</head>

<body>
<p id="uno" style="color:blue"></p>
<?php

$variable = 2;

echo "Prueba en echo php: $variable";

echo "<h1>Prueba en Html: $variable</h1>";

echo'<script type="text/javascript"> var uno = "<?php $variable = 2; echo $variable; ?>"; document.getElementById("uno").innerHTML = "Esto es un echo en JS: " + uno; </script>';

?>
</body>
</html>
