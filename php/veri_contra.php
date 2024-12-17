<?php

$contProfe=$_REQUEST['contraprof'];

$conexion = mysqli_connect("localhost", "root", "", "tboq") or die("Problemas con la conexion");

if(!evitarrepetidos($contProfe,$conexion)==1){
    header("location:login.php");

}else{

    header("location:php/sesion_prof.php");
}



    function evitarrepetidos($cont,$conexion){
        $checar="SELECT * FROM tboq_contradocente where contraDocente='$cont'";

        $resultado=mysqli_query($conexion,$checar);

        if(mysqli_num_rows($resultado) > 0){
            return 1;
        }else{
            return 0;
        }
        
    }

?>