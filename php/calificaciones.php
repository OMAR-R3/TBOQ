
<?php

$conexion = mysqli_connect("localhost", "root", "", "tboq") or die("Problemas con la conexion");

$usuario=$_POST['usuario'];
$clave=$_POST['contra'];

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/scroll.css">
    <link rel="stylesheet" href="../css/modallogin.css">
    <link rel="stylesheet" href="../css/sitphp.css">
    <link rel="shortcut icon" href="../img/lopini.png">
    <title>OSEO</title>
    <style>
     

    </style>
</head>
<body>
    <div class="lip" id="cero">.</div>

    <!--MENU-->
    <header>
        <!--Contenido menu-->
        <div class="btn-menu">
            <label for="btn-menu"><div class="btn"><img class="indi" src="../img/indi.png" alt="inidice"></div></label>
        </div>
        <!--Logotipo-->
        <img src="../img/umi2.png" alt="" class="logo">
        <!--eslogan-->
        <h2 class="eslogan">How do you see, if you know?</h2>
        <!--botones-->
        <ul>
        <li><div class="sobre"><?php echo "Usuario: $usuario";?></div></li>
                       <!--login-->
    
    <li><label for="btn-modal">
        <form action="cerrarsesion.php"  method="post" >
            <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
            <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
            <input class="logi" type="submit" value="Cerrar">
        </form>
    </label></li>


    
    <!--fin login-->
        </ul> 
    </header>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>

            <!-- INICIO -->
            <form action="index.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="INICIO" class="form"></form>
            <!-- OSEO --> 
                <form action="oseo.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="OSEO" class="form"></form>
            <!-- MUSCULAR --> 
                <form action="muscular.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="MUSCULAR" class="form"></form>
            <!-- DIGESTIVO -->                 
                <form action="digestivo.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="DIGESTIVO" class="form"></form>
            <!-- RESPIRATORIO -->                 
                <form action="respiratorio.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="RESPIRATORIO" class="form"></form>
            <!-- CIRCULATORIO --> 
                <form action="circulatorio.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="CIRCULATORIO" class="form"></form>
            <!-- REPRODUCTIVO --> 
                <form action="reproductivo.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="REPRODUCTIVO" class="form"></form>

                <a href="https://drive.google.com/file/d/1oouGYtB9vxT6AYvbXNRTwPLfffBi6pKD/view?usp=sharing" target="_blank">MANUAL DE USUARIO</a>
                <li class="li" style="padding: 15px 25px;"><div onclick="alert('Somos una página que tiene como principal objetivo que las y los estudiantes mejoren su desempeño académico en la materia de ciencias de la salud del sistema óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos.');">NOSOTROS</div></li>
                
                <li class="li" style="padding: 15px 25px;"><div onclick="alert('Tendrás que responder 10 preguntas sobre los sistemas óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos de cada uno de ellos, además obtendrás un puntaje que es almacenado el cual podrás mejorar en cada intento.');">¿DE QUE TRATA?</div></li>
            

            </nav>
            <label for="btn-menu">✖️    </label>
        </div>
    </div>
    <!--FIN-MENU-->

    <div class="lip2">.</div>

    <?php 
    $conexion = mysqli_connect("localhost", "root", "", "tboq") or die("Problemas con la conexion");

    $registros = mysqli_query($conexion, "SELECT nombreAlumno,grado,grupo,turno,correo,usuarioalumno,r1,r2,r3,r4,r5,r6 from tboq_calificaciones where usuarioalumno='$usuario'") or die("Problemas en el select:" . mysqli_error($conexion));


    if($reg = mysqli_fetch_array($registros)){

           
    ?>
    
    <!--Article-->
    <div class="cont" style="text-align: center; font-size: 20px;">
    <Br><Br>
    <Label style="color: red;">DATOS DE USUARIO</Label><Br>
    <Label>Nombre: <?php echo $reg['nombreAlumno'];?></Label><Br>
    <Label>Semestre: <?php echo $reg['grado'];?></Label><Br>
    <Label>Grupo: <?php echo $reg['grupo'];?></Label><Br>
    <Label>Turno: <?php echo $reg['turno'];?></Label><Br>
    <Label>Correo: <?php echo $reg['correo'];?></Label><Br>
    <Label>Usuario: <?php echo $reg['usuarioalumno'];?></Label><Br>
<br>
    <Label style="color: red;">CALIFICACIONES</Label><Br>
    <Label>Sistema oseo: <?php echo $r1=$reg['r1'];?>/10</Label><Br>
    <Label>Sistema muscular: <?php echo $r2=$reg['r2'];?>/10</Label><Br>
    <Label>Sistema digestivo: <?php echo $r3=$reg['r3'];?>/10</Label><Br>
    <Label>Sistema respiratorio: <?php echo $r5=$reg['r4'];?>/10</Label><Br>
    <Label>Sistema circulatorio: <?php echo $r4=$reg['r5'];?>/10</Label><Br>
    <Label>Sistemas reproductivo: <?php echo $r6=$reg['r6'];?>/10</Label><Br>
    <?php
                                   
               }
               $promedio= ($r1)+($r2)+($r3)+($r4)+($r5)+($r6);
            $promescue=($promedio/6);
            $promgene = bcdiv($promescue, '1', 1);
            ?>
<br><Br>
    <Label>PROMEDIO GENERAL: <?php echo $promgene;?>/10</Label><Br>

    </div>


    <!--FIN-Article-->

        <!--COMENTARIOS-->
    <div class="caja-comentario">
        <div class="comentarios">
            <div class="la1"></div>
            <div class="la2">
                <form action="https://formsubmit.co/garcia.cruz.joseomar.h20.c142@gmail.com" method="POST" id="formulario">
                    <h2>COMENTARIOS</h2>
                    <input type="text" name="nombre" class="field" placeholder="Nombre:">
                    <input type="email" name="correo" class="field" placeholder="Correo:">
                    <input type="text" name="telefono" class="field" placeholder="Telefono:">
                    <textarea name="mensaje" class="field" placeholder="Mensaje:" id="msj" ></textarea>
                    <button class="envialo">Enviar</button>
                </form>
            </div>
        </div>
    </div>

        <!-- footeriniin -->

        <div class="lol">
            <footer id="footer">
                <div class="giritos">
                    <div class="girito" id="vueltita1"></div>
                    <div class="girito" id="vueltita2"></div>
                    <div class="girito" id="vueltita3"></div>
                    <div class="girito" id="vueltita4"></div>
                </div>
        
                <div class="conetnidofooterino">
                    <div class="cajifooterini">
                        <a href="index.html"><div class="logolini">
                            <img src="../img/lopini.png" alt="">
                        </div></a>
                    </div>
        
                    <div class="cajifooterini">
                        <h2>Menú</h2>
                        <!-- INICIO -->
                        <form action="index.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="INICIO" class="men2"></form>
                        <!-- OSEO -->
                        <form action="oseo.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="OSEO" class="men2"></form>
                        <!-- MUSCULAR -->                        
                        <form action="muscular.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="MUSCULAR" class="men2"></form>
                        <!-- DIGESTIVO -->                        
                        <form action="digestivo.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="DIGESTIVO" class="men2"></form>
                        <!-- RESPIRATORIO -->                        
                        <form action="respiratorio.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="RESPIRATORIO" class="men2"></form>
                        <!-- CIRCULATORIO -->                        
                        <form action="circulatorio.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="CIRCULATORIO" class="men2"></form>
                        <!-- RESPRODUCTIVO -->                        
                        <form action="reproductivo.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="REPRODUCTIVO" class="men2"></form>      
                    </div>
        
                    <div class="cajifooterini">
                        <h2>Redes Sociales</h2>
                        <a href="https://www.instagram.com/thebodyofquestions/" target="bank"><ion-icon name="logo-instagram"></ion-icon>  Instagram</a>
                        <a href="https://www.facebook.com/thebodyofquestions/" target="bank"><ion-icon name="logo-facebook"></ion-icon>  Facebook</a>
                        <a href="https://twitter.com/body_questions/" target="bank"><ion-icon name="logo-twitter"></ion-icon>  Twitter</a>
                    </div>
        
                    <div class="cajifooterini">
                        <h2>Contacto</h2>
                        <a href="https://wa.me/4141046961" target="_blank"><i class="fas fa-mobile-alt"></i> 4141046961</a>
                        <a><i class="fas fa-mobile-alt"></i> questionsthebody@gmail.com</a>
                    </div>
        
                </div>
        
                <div class="nocopie">
                    <hr>
                    <p>&copy; The Body Of Question</p>
                </div>
        
            </footer></div>

        <!-- fin footeriniin -->
    <div class="lip" id="cero">.</div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/revisar.js"></script>
    <script src="../js/modals.js"></script>
</body>
</html>