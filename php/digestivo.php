

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
    <title>DIGESTIVO</title>
    <style>
        .c1{
            position: relative;
            right: 75px;
            top: 115px;
        }
        .c2{
           
            position: relative;
            right: 190px;
            top: 280px;
        }
        .c3{
            z-index: 2;
            position: relative;
            right: 50px;
            top: 395px;
        }
        .c4{
            
            position: relative;
            right: 283px;
            top: 380px;
        }
        .c5{
            
            position: relative;
            right: 255px;
            top: 500px;
        }
        .c6{
            
            position: relative;
            right: 240px;
            top: 130px;
        }
        .c7{
            
            position: relative;
            right: 235px;
            top: 175px;
        }
        .c8{
           
            position: relative;
            right: 160px;
            top: 380px;
        }
        .c9{
            
            position: relative;
            right: 215px;
            top: 467px;
        }
        .c10{
          
            position: relative;
            right: 235px;
            top: 520px;
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
                <h2 class="subtitulo1">SISTEMA DIGESTIVO</h2>
                <h2 class="subtitulo1" id="counter-label">CALIFICACION: 0/10</h2>
            </div>

            <div class="envule">
                <div class="caja1">
                    <div class="im1"><img clas="im1" src="../img/dige.jpg" alt="oseo" height="660px" width="390px"></div>
                    <div class="c6">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir6" value="6">
                        </label>
                        
                        <div class="modal" id="modal6">
                            <div class="contenedor" id="contenedor6">
                                <h2>Pregunta 6</h2>
                                <label for="btn-modal" id="cerrar6"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">6.-¿En qué parte comienza el tubo digestivo?</h3>
                                    <input class="opcionesbut" type="button" id="b61" value="a)Tráquea">
                                    <input class="opcionesbut" type="button" id="b62" value="b)Labios">
                                    <input class="opcionesbut" type="button" id="b63" value="c)Cavidad bocal">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="c7">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir7" value="7">
                        </label>
                        
                        <div class="modal" id="modal7">
                            <div class="contenedor" id="contenedor7">
                                <h2>Pregunta 7</h2>
                                <label for="btn-modal" id="cerrar7"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">7.-¿Qué parte de la boca es la que produce la saliva?</h3>
                                    <input class="opcionesbut" type="button" id="b71" value="a)Glándulas salivales">
                                    <input class="opcionesbut" type="button" id="b72" value="b)Lengua">
                                    <input class="opcionesbut" type="button" id="b73" value="c)Ninguna de las anteriores">
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
                                    <h3 class="pregunta">8.-¿El estómago es el cuarto elemento del tubo digestivo?</h3>
                                    <input class="opcionesbut" type="button" id="b81" value="a)Falso">
                                    <input class="opcionesbut" type="button" id="b82" value="b)Cierto">
                                    <input class="opcionesbut" type="button" id="b83" value="c)Talvez">
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
                                    <h3 class="pregunta">9.-¿En qué lugar del tubo diges􀆟vo se absorbe el agua?</h3>
                                    <input class="opcionesbut" type="button" id="b91" value="a)Intestino grueso">
                                    <input class="opcionesbut" type="button" id="b92" value="b)Intestino delgado">
                                    <input class="opcionesbut" type="button" id="b93" value="c)No absorbe agua">
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
                                    <h3 class="pregunta">10.-¿Tiene estructuras que ayudan a evitar que entren toxinas al torrente sanguíneo?</h3>
                                    <input class="opcionesbut" type="button"id="b101" value="a)Estomago">
                                    <input class="opcionesbut" type="button" id="b102" value="b)Intestino delgado">
                                    <input class="opcionesbut" type="button" id="b103" value="c)Esófago">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="caja2">
                    <div class="im2"><img clas="im2" src="../img/digestivo2.jpg" alt="oseo2" height="660px" width="350px"></div>
                    <div class="c1">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir1" value="1">
                        </label>
                        
                        <div class="modal" id="modal">
                            <div class="contenedor" id="contenedor">
                                <h2>Pregunta 1</h2>
                                <label for="btn-modal" id="cerrar"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">1.-El estomago es como una dilatación del tubo digestivo.</h3>
                                    <input class="opcionesbut" type="button" id="b11" value="a)Cierto">
                                    <input class="opcionesbut" type="button" id="b12" value="b)Falso">
                                    <input class="opcionesbut" type="button" id="b13" value="c)Cierto, pero solo en el comienzo">
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
                                    <h3 class="pregunta">2.-¿Qué conecta el estómago con la faringe?</h3>
                                    <input class="opcionesbut" type="button" id="b21" value="a)Tráquea">
                                    <input class="opcionesbut" type="button" id="b22" value="b)Cardenas">
                                    <input class="opcionesbut" type="button" id="b23" value="c)Esófago">
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
                                    <h3 class="pregunta">3.-¿Qué hay principalmente dentro del estómago?</h3>
                                    <input class="opcionesbut" type="button" id="b31" value="a)Jugos de estomago">
                                    <input class="opcionesbut" type="button" id="b32" value="b)Jugos gástricos">
                                    <input class="opcionesbut" type="button" id="b33" value="c)Jugos interiores">
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
                                    <h3 class="pregunta">4.-¿Qué intestino está conectado después del estómago?</h3>
                                    <input class="opcionesbut" type="button" id="b41" value="a)Grueso">
                                    <input class="opcionesbut" type="button" id="b42" value="b)Delgado">
                                    <input class="opcionesbut" type="button" id="b43" value="c)Ninguno">
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
                                    <h3 class="pregunta">5.-¿Qué pasa con los alimentos que pasan por el estómago?</h3>
                                    <input class="opcionesbut" type="button" id="b51" value="a)Se ablandan">
                                    <input class="opcionesbut" type="button" id="b52" value="b)Se trituran">
                                    <input class="opcionesbut" type="button" id="b53" value="c)Empiezan a desintegrarse">
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
    include("mod3.php");
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
    <script src="../js/revisar2.js"></script>
    <script src="../js/modals.js"></script>
</body>
</html>