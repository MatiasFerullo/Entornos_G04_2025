
<p>Con datos color="blanco" y flor=clavel</p>
<?php
$color = 'blanco';
$flor = 'clavel';
?>

<p>El siguiente bloque de codigo dara "El" por la primera linea ya que las variables no existen aún y "El clavel blanco" en la ultima linea</p>
<?php
echo "El $flor $color \n";
include 'datos.php';
echo " El $flor $color";
?>