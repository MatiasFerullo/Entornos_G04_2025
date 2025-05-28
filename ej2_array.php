<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12];
?>
<p>El primer elemento del array es "bar" y el segundo es "1", el codigo retorna "bar1"</p>

<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6];
echo $matriz["unamatriz"][13];
echo $matriz["unamatriz"]["a"];
?>

<p>El primer elemento del array es "5", el segundo es "9" y el tercero es "42", el codigo retorna "5942"</p>

<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56;
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?>
<p>El primer elemento del array es "2", el segundo es "56" y el tercero es "42", el codigo elimina la entrada {5: 1} de $matriz luego elimina la matriz de la memoria</p>