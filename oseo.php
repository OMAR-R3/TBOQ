<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="css/modallogin.css">
    <link rel="shortcut icon" href="img/lopini.png">
    <title>OSEO</title>
    <style>
        .c1{
            position: relative;
            right: 85px;
            top: 300px;
        }
        .c2{
           
            position: relative;
            right: 37px;
            top: 50px;
        }
        .c3{
            position: relative;
            right: 286px;
            top: 78px;
        }
        .c4{
            
            position: relative;
            right: 314px;
            top: 320px;
        }
        .c5{
            
            position: relative;
            right: 319px;
            top: 500px;
        }
        .c6{
            
            position: relative;
            right: 162px;
            top: 15px;
        }
        .c7{
            
            position: relative;
            right: 75px;
            top: 325px;
        }
        .c8{
           
            position: relative;
            right: 240px;
            top: 160px;
        }
        .c9{
            
            position: relative;
            right: 192px;
            top: 440px;
        }
        .c10{
          
            position: relative;
            right: 290px;
            top: 315px;
        }

    </style>
</head>
<body>
    <div class="lip" id="cero">.</div>

    <!--MENU-->
    <header>
        <!--Contenido menu-->
        <div class="btn-menu">
            <label for="btn-menu"><div class="btn"><img class="indi" src="img/indi.png" alt="inidice"></div></label>
        </div>
        <!--Logotipo-->
        <a href="index.php"><img src="img/umi2.png" alt="" class="logo"></a>
        <!--eslogan-->
        <a href="index.php"><h2 class="eslogan">How do you see, if you know?</h2></a>
        <!--botones-->
        <ul>
            <li><div class="sobre" onclick="alert('Somos una página que tiene como principal objetivo que las y los estudiantes mejoren su desempeño académico en la materia de ciencias de la salud del sistema óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos.');">NOSOTROS</div></li>
            <li><div class="sobre" onclick="alert('Tendrás que responder 10 preguntas sobre los sistemas óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos de cada uno de ellos, además obtendrás un puntaje que es almacenado el cual podrás mejorar en cada intento.');">¿DE QUE TRATA?</div></li>
            <label for="btn-modal">
        <a href="login.php"><input class="logi" type="button" value="Login"></a>
    </label>
        </ul> 
    </header>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
            <a href="index.php">INICIO</a>
                <a href="oseo.php">OSEO</a>
                <a href="muscular.php">MUSCULAR</a>
                <a href="digestivo.php">DIGESTIVO</a>
                <a href="respiratorio.php">RESPIRATORIO</a>
                <a href="circulatorio.php">CIRCULATORIO</a>
                <a href="reproductivo.php">REPRODUCTIVO</a>
                <a href="login.php">LOGIN</a>
                <a href="https://drive.google.com/file/d/1oouGYtB9vxT6AYvbXNRTwPLfffBi6pKD/view?usp=sharing" target="_blank">MANUAL DE USUARIO</a>
                <li><div class="so" onclick="alert('Somos una página que tiene como principal objetivo que las y los estudiantes mejoren su desempeño académico en la materia de ciencias de la salud del sistema óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos.');">NOSOTROS</div></li>
                <li><div class="so" onclick="alert('Tendrás que responder 10 preguntas sobre los sistemas óseo, muscular, digestivo, respiratorio, circulatorio y reproductivos de cada uno de ellos, además obtendrás un puntaje que es almacenado el cual podrás mejorar en cada intento.');">¿DE QUE TRATA?</div></li>
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
                <h2 class="subtitulo1">SISTEMA OSEO</h2>
                <h2 class="subtitulo1" id="counter-label">CALIFICACION: 0/10</h2>
            </div>

            <div class="envule">
                <div class="caja1">
                    <div class="im1"><img clas="im1" src="img/kalaquita.png" alt="oseo" height="660px" width="390px"></div>
                    
                    <div class="c6">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir6" value="6">
                        </label>
                        
                        <div class="modal" id="modal6">
                            <div class="contenedor" id="contenedor6">
                                <h2>Pregunta 6</h2>
                                <label for="btn-modal" id="cerrar6"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">6.-¿Qué es lo que protegen principalmente los huesos del cráneo?</h3>
                                    <input class="opcionesbut" type="button" id="b61" value="a)Sistema nervioso central">
                                    <input class="opcionesbut" type="button" id="b62" value="b)Sistema óseo central">
                                    <input class="opcionesbut" type="button" id="b63" value="c)Sistema muscular">
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
                                    <h3 class="pregunta">7.-Los brazos son parte del esqueleto apendicular.</h3>
                                    <input class="opcionesbut" type="button" id="b71" value="a)Cierto">
                                    <input class="opcionesbut" type="button" id="b72" value="b)Falso">
                                    <input class="opcionesbut" type="button" id="b73" value="c)Cierto, pero también son parte del axial">
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
                                    <h3 class="pregunta">8.-¿Qué parte del esqueleto se encarga de la protección de los pulmones y el corazón?</h3>
                                    <input class="opcionesbut" type="button" id="b81" value="a)Columna vertebral">
                                    <input class="opcionesbut" type="button" id="b82" value="b)Cavidad torácica">
                                    <input class="opcionesbut" type="button" id="b83" value="c)Ninguna de las anteriores">
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
                                    <h3 class="pregunta">9.-¿Las piernas son parte del esqueleto axial?</h3>
                                    <input class="opcionesbut" type="button" id="b91" value="a)Si">
                                    <input class="opcionesbut" type="button" id="b92" value="b)También del apendicular">
                                    <input class="opcionesbut" type="button" id="b93" value="c)Ninguna de las anteriores">
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
                                    <h3 class="pregunta">10.-¿A que unen los huesos de la pelvis los miembros inferiros?</h3>
                                    <input class="opcionesbut" type="button"id="b101" value="a)Al esqueleto apendicular">
                                    <input class="opcionesbut" type="button" id="b102" value="b)Al esqueleto axial">
                                    <input class="opcionesbut" type="button" id="b103" value="c)Ningna de las anteriores.">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="caja2">
                    <div class="im2"><img clas="im2" src="img/oseo2.jpg" alt="oseo2" height="660px" width="300px"></div>
                    
                    <div class="c1">
                        
                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir1" value="1">
                        </label>
                        
                        <div class="modal" id="modal">
                            <div class="contenedor" id="contenedor">
                                <h2>Pregunta 1</h2>
                                <label for="btn-modal" id="cerrar"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">1.-¿Qué es lo que se encuentra dentro de los huesos?</h3>
                                    <input class="opcionesbut" type="button" id="b11" value="a)Medula osea">
                                    <input class="opcionesbut" type="button" id="b12" value="b)Calcio">
                                    <input class="opcionesbut" type="button" id="b13" value="c)Liquido óseo">
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
                                    <h3 class="pregunta">2.-¿Además del calcio que otro mineral se encuentra presente en mayor cantidad en los huesos?</h3>
                                    <input class="opcionesbut" type="button" id="b21" value="a)Fosforo">
                                    <input class="opcionesbut" type="button" id="b22" value="b)Fosfato">
                                    <input class="opcionesbut" type="button" id="b23" value="c)Magnesio">
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
                                    <h3 class="pregunta">3.-¿Cuál es el extremo superior de los huesos?</h3>
                                    <input class="opcionesbut" type="button" id="b31" value="a)Diáfisis">
                                    <input class="opcionesbut" type="button" id="b32" value="b)Epiglosis">
                                    <input class="opcionesbut" type="button" id="b33" value="c)Epífisis">
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
                                    <h3 class="pregunta">4.-¿Cuál es el nombre de la región central de los huesos?</h3>
                                    <input class="opcionesbut" type="button" id="b41" value="a)Diafisis">
                                    <input class="opcionesbut" type="button" id="b42" value="b)Medula ósea">
                                    <input class="opcionesbut" type="button" id="b43" value="c)Parte central">
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
                                    <h3 class="pregunta">5.-¿Cuál es el nombre del extremo inferior de los huesos??</h3>
                                    <input class="opcionesbut" type="button" id="b51" value="a)Parte inferior">
                                    <input class="opcionesbut" type="button" id="b52" value="b)Cabezal">
                                    <input class="opcionesbut" type="button" id="b53" value="c)Epífisis">
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
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?> "  method="post"style="display: none; >
                                <input type="text" name="usuario" value="<?php echo $usuario;?>" style="display: none;">
                                <input type="text"name="contra" value="<?php echo $clave;?>" style="display: none;">
                                <input type="text" name="caloseo" value="" style="display: none;" id="btnguardar">
                       
                            </form>
                        </div>
                        <div class="regrehome">
                            <ion-icon name="arrow-back-circle-outline" id="cre"></ion-icon>

                            <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
                        </div>
                    </div>
                </div>
            </div>







            <video id="video3" width="0px" height="0px" display="none" visibility="hiden">  
                <source src="audios/correct.mp3">   
            </video> 
            <video id="video4" width="0px" height="0px" display="none" visibility="hiden">  
                <source src="audios/incorect2.mp3">   
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
                        <a href="index.html"><div class="logolini">
                            <img src="img/lopini.png" alt="">
                        </div></a>
                    </div>
        
                    <div class="cajifooterini">
                        <h2>Menú</h2>
                        <a href="index.php">INICIO</a>
                        <a href="oseo.php">OSEO</a>
                        <a href="muscular.php">MUSCULAR</a>
                        <a href="digestivo.php">DIGESTIVO</a>
                        <a href="respiratorio.php">RESPIRATORIO</a>
                        <a href="circulatorio.php">CIRCULATORIO</a>
                        <a href="reproductivo.php">REPRODUCTIVO</a>
                        <a href="login.php">LOGIN</a>        
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
    <script src="js/revisar.js"></script>
    <script src="js/modals.js"></script>
</body>
</html>