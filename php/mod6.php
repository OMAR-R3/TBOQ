<?php

$caloseo=$_POST['caloseo'];
$usuario=$_POST['usuario'];

date_default_timezone_set(timezoneId:"America/Monterrey");

$fecha = date(format: 'Y-m-d');

$hora=date(format: 'H:i:s');

$conexion = mysqli_connect("localhost", "root", "", "tboq") or die("Problemas con la conexion");

$modif = mysqli_query($conexion, "UPDATE tboq_calificaciones set fecha6='$fecha', hora6='$hora',r6='$caloseo' where usuarioalumno='$usuario'") or die("Problemas en el update:" . mysqli_error($conexion));

?>
