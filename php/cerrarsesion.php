<?php

$conexion = mysqli_connect("localhost", "root", "", "tboq") or die("Problemas con la conexion");

$registros = mysqli_query($conexion, "SELECT cod from tboq_cooki where usuario='$_REQUEST[usuario]'") or die("Problemas en el select:" . mysqli_error($conexion));

if($reg = mysqli_fetch_array($registros)){
    mysqli_query($conexion, "DELETE from tboq_cooki where usuario='$_REQUEST[usuario]'") or die ("Problemas en el select" . mysqli_error($conexion));
    header('Location: sesion.php');
}
?>

