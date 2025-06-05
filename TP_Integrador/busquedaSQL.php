<?php
function busquedaSQL($query,){
    require 'conexion.php';
    $ResultadoPre = mysqli_query($link, $query) or die (mysqli_error($link));
    $Resultado = mysqli_fetch_assoc($ResultadoPre);
    return $Resultado;
}

?>