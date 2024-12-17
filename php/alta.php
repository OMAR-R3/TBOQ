<?php

    
$nombre = $_REQUEST['nombre'];
$grado = $_REQUEST['grado'];
$grupo = $_REQUEST['grupo'];
$turno = $_REQUEST['turno'];
$correo = $_REQUEST['correo'];
$usuario = $_REQUEST['usuario'];
$contraseña = $_REQUEST['contra'];


    $conexion = mysqli_connect("localhost", "root", "", "tboq") or die("Problemas con la conexion");



if(evitarrepetidos($nombre,$grado,$grupo,$turno,$correo,$usuario,$contraseña,$conexion)==1){
    echo "<div class='repe'>Usuario en existencia</div>";
}else{
    mysqli_query($conexion, "INSERT into tboq_loginalumnoa(nombreAlumno,grado,grupo,turno,correo,usuarioalumno,contraalumno) values ('$nombre','$grado','$grupo','$turno','$correo','$usuario','$contraseña')") or die("Problemas en el insert" . mysqli_error($conexion));
    mysqli_query($conexion, "INSERT into tboq_calificaciones(nombreAlumno,grado,grupo,turno,correo,usuarioalumno,r1,r2,r3,r4,r5,r6) values ('$nombre','$grado','$grupo','$turno','$correo','$usuario','0','0','0','0','0','0')") or die("Problemas en el insert" . mysqli_error($conexion));
            
    echo"<div class='creado'>Usuario creado</div>";
}


function evitarrepetidos($nom,$grad,$grup,$turn,$corr,$usuars,$cont,$conexion){
    $checar="SELECT * FROM tboq_loginalumnoa where nombreAlumno='$nom' and grado='$grad' and grupo='$grup' and turno='$turn' and correo='$corr' and usuarioalumno='$usuars' and contraalumno='$cont'";

    $resultado=mysqli_query($conexion,$checar);

    if(mysqli_num_rows($resultado) > 0){
        return 1;
    }else{
        return 0;
    }
    
}


?>