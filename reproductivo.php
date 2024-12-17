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
    <title>REPRODUCTIVO</title>
    <style>
        .c1{
            position: relative;
            right: 260px;
            top: 10px;
        }
        .c2{
           
            position: relative;
            right: 485px;
            top: 70px;
        }
        .c3{
            z-index: 2;
            position: relative;
            right: 65px;
            top: 345px;
        }
        .c4{
            
            position: relative;
            right: 550px;
            top: 412px;
        }
        .c5{
            
            position: relative;
            right: 269px;
            top: 530px;
        }
        .c6{
            
            position: relative;
            right:240px;
            top: 140px;
        }
        .c7{
            
            position: relative;
            right: 130px;
            top: 160px;
        }
        .c8{
           
            position: relative;
            right: 275px;
            top: 235px;
        }
        .c9{
            
            position: relative;
            right: 487px;
            top: 495px;
        }
        .c10{
          
            position: relative;
            right: 415px;
            top: 490px;
        }
        @media (max-width:511px){
            .c1{
                position: relative;
                right: 135px;
                top: 0px;
            }
            .c2{
               
                position: relative;
                right: 259px;
                top: 20px;
            }
            .c3{
                z-index: 2;
                position: relative;
                right: 55px;
                top: 167px;
            }
            .c4{
                
                position: relative;
                right: 310px;
                top: 202px;
            }
            .c5{
                
                position: relative;
                right: 179px;
                top: 255px;
            }

            .c6{
                position: relative;
                right: 120px;
                top: 70px;
            }
            .c7{
            
                position: relative;
                right: 80px;
                top: 80px;
            }
            .c8{
               
                position: relative;
                right: 162px;
                top: 115px;
            }
            .c9{
                
                position: relative;
                right: 280px;
                top: 230px;
            }
            .c10{
              
                position: relative;
                right: 255px;
                top: 240px;
            }
            /*.botono {
                width: 17px;
                height: 17px;
            }*/
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
                <h3 class="subtitulo1">SISTEMAS REPRODUCTIVOS</h3>
                <h3 class="subtitulo1" id="counter-label">CALIFICACION: 0/10</h3>
            </div>

            <div class="envule">
                <div class="caja1">
                    <div class="imre"><img class="imcir1" src="img/hombre.jpg" alt="oseo" ></div>

                    <div class="c6">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir6" value="6">
                        </label>
                        
                        <div class="modal" id="modal6">
                            <div class="contenedor" id="contenedor6">
                                <h2>Pregunta 6</h2>
                                <label for="btn-modal" id="cerrar6"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">6.-¿Cuál es el conducto que guía los espermatozoides hacia el exterior?</h3>
                                    <input class="opcionesbut" type="button" id="b61" value="a)Diferente">
                                    <input class="opcionesbut" type="button" id="b62" value="b)Deferente">
                                    <input class="opcionesbut" type="button" id="b63" value="c)Referente">
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
                                    <h3 class="pregunta">7.-¿Cuál es el órgano que elabora el líquido en donde se encuentran los espermatozoides?</h3>
                                    <input class="opcionesbut" type="button" id="b71" value="a)Próstata">
                                    <input class="opcionesbut" type="button" id="b72" value="b)Seminal">
                                    <input class="opcionesbut" type="button" id="b73" value="c)Vesícula seminal">
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
                                    <h3 class="pregunta">8.-¿Cómo se llama esta parte del aparato reproductor?</h3>
                                    <input class="opcionesbut" type="button" id="b81" value="a)Glándula inferior">
                                    <input class="opcionesbut" type="button" id="b82" value="b)Vesícula">
                                    <input class="opcionesbut" type="button" id="b83" value="c)Próstata">
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
                                    <h3 class="pregunta">9.-¿Cuál es el órgano genital externo?</h3>
                                    <input class="opcionesbut" type="button" id="b91" value="a)Testiculo">
                                    <input class="opcionesbut" type="button" id="b92" value="b)Pene">
                                    <input class="opcionesbut" type="button" id="b93" value="c)Uretra">
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
                                    <h3 class="pregunta">10.-¿Cuáles son los encargados de producir los espermatozoides?</h3>
                                    <input class="opcionesbut" type="button"id="b101" value="a)Testiculos">
                                    <input class="opcionesbut" type="button" id="b102" value="b)Escroto">
                                    <input class="opcionesbut" type="button" id="b103" value="c)Uretra">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="caja2">
                    <div class="imre"><img class="imcir2" src="img/mujer.png" alt="oseo2"></div>
                    <div class="c1">

                        <label for="btn-modal" class="lbl-modal">
                            <input type="button" id="abrir1" value="1">
                        </label>
                        
                        <div class="modal" id="modal">
                            <div class="contenedor" id="contenedor">
                                <h2>Pregunta 1</h2>
                                <label for="btn-modal" id="cerrar"><ion-icon class="cer" name="close-circle-outline"></ion-icon></label>
                                <div class="contenido">
                                    <h3 class="pregunta">1.-¿Nombre de la parte que se encarga de recibir al óvulo fecundado?</h3>
                                    <input class="opcionesbut" type="button" id="b11" value="a)Trompas">
                                    <input class="opcionesbut" type="button" id="b12" value="b)Uterino">
                                    <input class="opcionesbut" type="button" id="b13" value="c)Útero">
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
                                    <h3 class="pregunta">2.-¿Cuál es la parte que comunica a los ovarios con el útero?</h3>
                                    <input class="opcionesbut" type="button" id="b21" value="a)Trompas de Falopio">
                                    <input class="opcionesbut" type="button" id="b22" value="b)Trompas de ingreso">
                                    <input class="opcionesbut" type="button" id="b23" value="c)Trompas de salida">
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
                                    <h3 class="pregunta">3.-¿Cuáles son los órganos que fabrican los óvulos?</h3>
                                    <input class="opcionesbut" type="button" id="b31" value="a)Ovarios">
                                    <input class="opcionesbut" type="button" id="b32" value="b)Trompas">
                                    <input class="opcionesbut" type="button" id="b33" value="c)Útero">
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
                                    <h3 class="pregunta">4.-Parte que se encuentra entre el útero y la vagina.</h3>
                                    <input class="opcionesbut" type="button" id="b41" value="a)Conducto medio">
                                    <input class="opcionesbut" type="button" id="b42" value="b)Conducto interior">
                                    <input class="opcionesbut" type="button" id="b43" value="c)Cuello uterino">
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
                                    <h3 class="pregunta">5.-Conducto que se encuentra en el exterior del aparato.</h3>
                                    <input class="opcionesbut" type="button" id="b51" value="a)Vagina">
                                    <input class="opcionesbut" type="button" id="b52" value="b)Utero">
                                    <input class="opcionesbut" type="button" id="b53" value="c)Ovario">
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
    <script src="js/revisar3.js"></script>
    <script src="js/modals.js"></script>
</body>
</html>