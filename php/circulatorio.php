

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
    <title>CIRCULATORIO</title>
    <style>
        .c1{
            position: relative;
            right: 115px;
            top: 132px;
        }
        .c2{
           
            position: relative;
            right: 500px;
            top: 160px;
        }
        .c3{
            z-index: 2;
            position: relative;
            right: 70px;
            top: 285px;
        }
        .c4{
            
            position: relative;
            right: 560px;
            top: 317px;
        }
        .c5{
            
            position: relative;
            right: 140px;
            top: 458px;
        }
        .c6{
            
            position: relative;
            right: 570px;
            top: 475px;
        }
        .c7{
            
            position: relative;
            right: 170px;
            top: 80px;
        }
        .c8{
           
            position: relative;
            right: 460px;
            top: 170px;
        }
        .c9{
            
            position: relative;
            right: 535px;
            top: 345px;
        }
        .c10{
          
            position: relative;
            right: 300px;
            top: 500px;
        }
        @media (max-width:511px){
            .c1{
                position: relative;
                right: 60px;
                top: 60px;
            }
            .c2{
               
                position: relative;
                right: 270px;
                top: 75px;
            }
            .c3{
                z-index: 2;
                position: relative;
                right: 70px;
                top: 137px;
            }
            .c4{
                
                position: relative;
                right: 320px;
                top: 153px;
            }
            .c5{
                
                position: relative;
                right: 125px;
                top: 224px;
            }

            .c6{
                position: relative;
                right: 340px;
                top: 233px;
            }
            .c7{
            
                position: relative;
                right: 80px;
                top: 35px;
            }
            .c8{
               
                position: relative;
                right: 250px;
                top: 80px;
            }
            .c9{
                
                position: relative;
                right: 300px;
                top: 165px;
            }
            .c10{
              
                position: relative;
                right: 180px;
                top: 245px;
            }
            /*.botono {
                width: 17px;
                height: 17px;
            }*/
        }
                .botnguardar{
        background: #33f1e0;
        border-style: none;
        border-radius: 25px;
        padding: 5px 10px;
        cursor: pointer;
        transition: all 0.5s;
    }
    .botnguardar:hover{
        background: #33f1e0;
        padding: 6px 15px;
    }
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
            <!-- CALIFICACIONES --> 
            <form action="calificaciones.php"  method="post" >
                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                <input type="submit" value="CALIFICACIONES" class="form"></form>                

                <a href="https://drive.google.com/file/d/1oouGYtB9vxT6AYvbXNRTwPLfffBi6pKD/view?usp=sharing" target="_blank">MANUAL DE USUARIO</a>
                <li class="li" style="padding: 15px 25px;"><div onclick="alert('Somos una página que tiene como principal objetivo que las y los estudiantes mejoren su desempeño académico en la materia de ciencias de la salud del sistema óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos.');">NOSOTROS</div></li>
                
                <li class="li" style="padding: 15px 25px;"><div onclick="alert('Tendrás que responder 10 preguntas sobre los sistemas óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos de cada uno de ellos, además obtendrás un puntaje que es almacenado el cual podrás mejorar en cada intento.');">¿DE QUE TRATA?</div></li>
            
            </nav>
            <label for="btn-menu">✖️    </label>
        </div>
    </div>
    <!--FIN-MENU-->

    <div class="lip2">.</div>
    
    <!--Article-->
    <div class="evi"><article>
        
        <div class="cajabiog">

            <div class="cajgo">
                <h2 class="subtitulo1">SISTEMA CIRCULATORIO</h2>
                <h2 class="subtitulo1" id="counter-label">CALIFICACION: 0/10</h2>
            </div>

            <div class="envule">
                <div class="caja1">
                    <div class="imre"><img class="imcir1" src="../img/circulatorio.png" alt="oseo" ></div>

                    <div class="c7">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir7" value="7">
                        </label>
                        
                        <div class="modal" id="modal7">
                            <div class="contenedor" id="contenedor7">
                                <h2>Pregunta 7</h2>
                                <label for="btn-modal" id="cerrar7"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">7.-¿Cuáles son los que se encargan de distribuir la sangre en todo el organismo?</h3>
                                    <input class="opcionesbut" type="button" id="b71" value="a)Vasos sanguíneos">
                                    <input class="opcionesbut" type="button" id="b72" value="b)Arterias">
                                    <input class="opcionesbut" type="button" id="b73" value="c)Vasos centrales">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c8">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir8" value="8">
                        </label>
                        
                        <div class="modal" id="modal8">
                            <div class="contenedor" id="contenedor8">
                                <h2>Pregunta 8</h2>
                                <label for="btn-modal" id="cerrar8"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">8.-No hay sangre en las arterias.</h3>
                                    <input class="opcionesbut" type="button" id="b81" value="a)Cierto">
                                    <input class="opcionesbut" type="button" id="b82" value="b)Falso">
                                    <input class="opcionesbut" type="button" id="b83" value="c)Solo en algunas">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c9">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir9" value="9">
                        </label>
                        
                        <div class="modal" id="modal9">
                            <div class="contenedor" id="contenedor9">
                                <h2>Pregunta 9</h2>
                                <label for="btn-modal" id="cerrar9"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">9.-¿Qué parte transporta sangre oxigenada?</h3>
                                    <input class="opcionesbut" type="button" id="b91" value="a)Arterias">
                                    <input class="opcionesbut" type="button" id="b92" value="b)Corazón">
                                    <input class="opcionesbut" type="button" id="b93" value="c)Cava superior">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c10">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir10" value="10">
                        </label>
                        
                        
                        <div class="modal" id="modal10">
                            <div class="contenedor" id="contenedor10">
                                <h2>Pregunta 10</h2>
                                <label for="btn-modal" id="cerrar10"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">10.-¿Qué es lo que transportan las arterias??</h3>
                                    <input class="opcionesbut" type="button"id="b101" value="a)Oxigeno">
                                    <input class="opcionesbut" type="button" id="b102" value="b)Sangre">
                                    <input class="opcionesbut" type="button" id="b103" value="c)Agua">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="caja2">
                    <div class="imre"><img class="imcir2" src="../img/circulatorio2.png" alt="oseo2"></div>
                    <div class="c1">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir1" value="1">
                        </label>
                        
                        <div class="modal" id="modal">
                            <div class="contenedor" id="contenedor">
                                <h2>Pregunta 1</h2>
                                <label for="btn-modal" id="cerrar"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">1.-¿Las venas pulmonares de qué color son?</h3>
                                    <input class="opcionesbut" type="button" id="b11" value="a)Rojas">
                                    <input class="opcionesbut" type="button" id="b12" value="b)Solo algunas son rojas">
                                    <input class="opcionesbut" type="button" id="b13" value="c)Azules">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c2">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir2" value="2">
                        </label>
                        
                        <div class="modal" id="modal2">
                            <div class="contenedor" id="contenedor2">
                                <h2>Pregunta 2</h2>
                                <label for="btn-modal" id="cerrar2"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">2.-¿Cuál es la vena superior conectada a la aurícula derecha?</h3>
                                    <input class="opcionesbut" type="button" id="b21" value="a)Cava principal">
                                    <input class="opcionesbut" type="button" id="b22" value="b)Cava superior">
                                    <input class="opcionesbut" type="button" id="b23" value="c)No hay ninguna conectada">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c3">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir3" value="3">
                        </label>
                        
                        <div class="modal" id="modal3">
                            <div class="contenedor" id="contenedor3">
                                <h2>Pregunta 3</h2>
                                <label for="btn-modal" id="cerrar3"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">3.-¿Cuáles son las cámaras que se encargan de recibir sangre de las venas dentro del corazón?</h3>
                                    <input class="opcionesbut" type="button" id="b31" value="a)Vasos sanguíneos">
                                    <input class="opcionesbut" type="button" id="b32" value="b)Aulículas">
                                    <input class="opcionesbut" type="button" id="b33" value="c)Aurículas">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c4">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir4" value="4">
                        </label>
                        
                        <div class="modal" id="modal4">
                            <div class="contenedor" id="contenedor4">
                                <h2>Pregunta 4</h2>
                                <label for="btn-modal" id="cerrar4"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">4.-¿Cuál es la aurícula que recibe la sangre de la vena cava superior?</h3>
                                    <input class="opcionesbut" type="button" id="b41" value="a)Aurícula derecha">
                                    <input class="opcionesbut" type="button" id="b42" value="b)Aurícula izquierda">
                                    <input class="opcionesbut" type="button" id="b43" value="c)No resiben sangre">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c5">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir5" value="5">
                        </label>
                        
                        <div class="modal" id="modal5">
                            <div class="contenedor" id="contenedor5">
                                <h2>Pregunta 5</h2>
                                <label for="btn-modal" id="cerrar5"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">5.-¿El ventrículo izquierdo hacía que arteria lleva la sangre?</h3>
                                    <input class="opcionesbut" type="button" id="b51" value="a)Arteria superior">
                                    <input class="opcionesbut" type="button" id="b52" value="b)Ventrículo derecho">
                                    <input class="opcionesbut" type="button" id="b53" value="c)Arteria Aorta">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c6">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir6" value="6">
                        </label>
                        
                        <div class="modal" id="modal6">
                            <div class="contenedor" id="contenedor6">
                                <h2>Pregunta 6</h2>
                                <label for="btn-modal" id="cerrar6"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">6.-¿Cómo se llaman las cavidades que impulsan la sangre fuera del corazón?</h3>
                                    <input class="opcionesbut" type="button" id="b61" value="a)Ventrículos">
                                    <input class="opcionesbut" type="button" id="b62" value="b)Aurículas">
                                    <input class="opcionesbut" type="button" id="b63" value="c)Ventrículo derecho">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>

            <div class="cajgu">
                <button class="btnj1" id="reinicio">REINICIO</button>
                <label for="btn-modal" class="lbl-modal">
                    
                    <button class="btnj1"  id="terminar1">TERMINAR</button>
                </label>
            </div>

            <div class="modal" id="modalter">
                <div class="contenedor" id="contcer">
                    <h2>TERMINAR</h2>
                    <label for="btn-modal" id="certer"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                    <div class="contenido">
                        <div class="caliterm">
                            <h3 class="calitel" id="cali"></h3>
                            <p class="pelte" id="pel"></p>
                            <img src="../img/casinexp.png" alt="" class="img-face" id="img-face">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?> "  method="post" >
                                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                                <input type="text" name="caloseo" value="" style="display: none;" id="btnguardar">
                                <input type="submit" value="GUARDAR" class="botnguardar" name="env" >
                            </form>
                        </div>
                        <div class="regrehome">
                            <ion-icon name="arrow-back-circle-outline" id="cre"></ion-icon>

                            <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>

            <?php

if(isset($_POST["env"])){
    include("mod5.php");
}


?>


            <video id="video3" width="0px" height="0px" display="none" visibility="hiden">  
                <source src="../audios/correct.mp3">   
            </video> 
            <video id="video4" width="0px" height="0px" display="none" visibility="hiden">  
                <source src="../audios/incorect2.mp3">   
            </video>
    
        </div>
    </article></div>


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
                        <a href="#cero"><div class="logolini">
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
                        <!-- CALIFICACIONES --> 
                        <form action="calificaciones.php"  method="post" >
                        <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                        <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                        <input type="submit" value="CALIFICACIONES" class="men2"></form>                              
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