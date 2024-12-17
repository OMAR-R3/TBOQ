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
    
    <title>INICIO</title>
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
            
               <!--login-->
    
    <label for="btn-modal">
        <a href="login.php"><input class="logi" type="button" value="Login"></a>
    </label>
    
    <!--fin login-->
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

    <!--Slider-->
    <div class="fi"><section class="slider">
        <div class="slider__conteni conteni">
            <img src="img/left.svg" class="slider__flechita" id="atras" alt="">

            <!--1sis-->
            <section class="slider__body slider__body--show" data-id="1">
                    <div class="slider__text">
                        <h2 class="subtitulo">SISTEMA Oseo</h2>
                        <p class="slider__parra">
                            El sistema óseo o esqueletico, está formado por los huesos, las articulaciones y los cartílagos, los huesos son duros y rígidos, y soportan todo nuestro cuerpo.
                            <a href="#pri"><button class="btnsli">Descubre<ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                        </p>
                        
                    </div>

                <figure class="slider__imagen">
                    <img src="img/os.jpg" alt="" class="slider__img">
                </figure>
            </section>

            <!--2sis-->
            <section class="slider__body" data-id="2">
                    <div class="slider__text">
                        <h2 class="subtitulo">SISTEMA Muscular</h2>
                        <p class="slider__parra">
                            Son capaces de producir el movimiento por que pueden contraerse y relajarse sin romperse, es decir elásticos, además protegen a los órganos.
                            <a href="#dos"><button class="btnsli">Descubre<ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                        </p>
                    </div>

                <figure class="slider__imagen">
                    <img src="img/mus.jpg" alt="" class="slider__img">
                </figure>
            </section>

            <!--3sis-->
            <section class="slider__body" data-id="3">
                    <div class="slider__text">
                        <h2 class="subtitulo">SISTEMA Digestivo</h2>
                        <p class="slider__parra">
                            Es el encargado de transformar en energía los alimentos, la digestión comienza en la boca, cuando masticamos el alimento, este se mezcla con la saliva formando el bolo alimenticio, pasa por la faringe y el esófago hasta el estómago.
                            <a href="#terci"><button class="btnsli">Descubre<ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                        </p>
                    </div>

                <figure class="slider__imagen">
                    <img src="img/di.jpg" alt="" class="slider__img">
                </figure>
            </section>
             <!--4sis-->
            <section class="slider__body" data-id="4">
                    <div class="slider__text">
                        <h2 class="subtitulo">SISTEMA Respiratorio</h2>
                        <p class="slider__parra">
                            Se encarga de la respiración, a través de la nariz o boca obtenemos el oxígeno que pasa por la faringe laringe y tráquea hasta los pulmones.
                            <a href="#cuarti"><button class="btnsli">Descubre<ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                        </p>
                    </div>

                <figure class="slider__imagen">
                    <img src="img/res.jpg" alt="" class="slider__img">
                </figure>
            </section>

            <!--5sis-->
            <section class="slider__body" data-id="5">
                    <div class="slider__text">
                        <h2 class="subtitulo">SISTEMA Circulatorio</h2>
                        <p class="slider__parra">
                            El corazón es el motor principal del sistema, el sistema circulatorio lleva la sangre a todas las partes del cuerpo, para cuidarlo tienes que hacer ejercicio y tener una alimentación sana. Cada latido que da permite que la sangre llegue a todo el cuerpo.
                            <a href="#quinti"><button class="btnsli">Descubre<ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                        </p>
                    </div>

                <figure class="slider__imagen">
                    <img src="img/cir.jpg" alt="" class="slider__img">
                </figure>
            </section>

            <!--6sis-->
            <section class="slider__body" data-id="6">
                    <div class="slider__text">
                        <h2 class="subtitulo">SISTEMA Reproductivo</h2>
                        <p class="slider__parra">
                            El aparato reproductor es un conjunto de diferentes órganos encargados de la función vital de la reproducción.
                            <a href="#sext"><button class="btnsli">Descubre<ion-icon name="arrow-forward-outline"></ion-icon></button></a>
                        </p>
                    </div>

                <figure class="slider__imagen">
                    <img src="img/sex.jpg" alt="" class="slider__img">
                </figure>
            </section>


            <img src="img/right.svg" class="slider__flechita" id="avanza" alt="">
        </div>
    </section>
    <div class="burbujas">
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1 no"></div>
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1"></div>
        <div class="burbuja burbuja1"></div>
    </div></div>
    <!--FIN-Slider-->

    <!--Botnocito-->
    <div class="contenidelo">
        <input type="checkbox" id="btn-sobres">
        <div class="sistemes">
            <a href="#cero"><img src="icons/casa.png" alt="" class="icon"></a>
            <a href="#pri"><img src="icons/medula-osea (1).png" alt="" class="icon"></a>
            <a href="#dos"><img src="icons/musculo.png" alt="" class="icon"></a>
            <a href="#terci"><img src="icons/intestino.png" alt="" class="icon"></a>
            <a href="#cuarti"><img src="icons/pulmones.png" alt="" class="icon"></a>
            <a href="#quinti"><img src="icons/corazon.png" alt="" class="icon"></a>
            <a href="#sext"><img src="icons/sexo.png" alt="" class="icon"></a>
        </div>
        <div class="btn-sobres">
            <label for="btn-sobres" class="icon2"><img src="icons/mas.png" alt="" class="icon" ></label>
        </div>
    </div>
    <!--FIN-Botnocito-->
    
    <!--Article-->

     <!--modo1-->
    <div class="contenelo" id="sobr">
        <div class="contenidin" id="pri">
            <div class="textos">
                <br><h1>SISTEMA OSEO</h1>
                <p>El sistema óseo o esqueletico, está formado por los huesos, las articulaciones y los cartílagos, 
                    los huesos son duros y rígidos, soportan todo nuestro cuerpo, las articulaciones son los puntos 
                    donde se unen los huesos y dan movilidad al esqueleto. Los cartílagos son más blandos y estáticos 
                    que los huesos, tenemos cartílagos en las articulaciones la nariz y las orejas. El sistema muscular 
                    junto con el sistema óseo formar el sistema locomotor, tienes más de 200 huesos, como el cráneo, la 
                    columna vertebral, el humero, las costillas y el fémur.
                </p><br>
                <a href="oseo.php">Jugar</a>
            </div>
            <div class="imagenli">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wD6QXREmRrg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="absolute"></div>
    </div>

<!--modo2-->
    <div class="contenelo2" id="dos">
        <div class="contenidin">
            <div class="textos2">
                <br><h1>SISTEMA MUSCULAR</h1>
                <p>Son capaces de producir el movimiento por que pueden contraerse y relajarse sin romperse, es decir 
                    elásticos además protegen a los órganos. El sistema muscular junto con el sistema óseo forma el aparato 
                    locomotor los músculos se unen al esqueleto por unas fibras llamadas tendones la unión de ambos sistemas
                     coordinados con el sistema nervioso es lo que nos permite movernos. Tienes más de 600 músculos dispersados 
                     por todo el cuerpo, como los bíceps, los pectorales.
                </p><br>
                <a href="muscular.php">Jugar</a>
            </div>
            <div class="imagenli">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Sv5-QjFPVUQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="absolute2"></div>
    </div>


         <!--modo1-->
    <div class="contenelo" id="sobr">
        <div class="contenidin" id="terci">
            <div class="textos">
                <br><h1>SISTEMA DIGESTIVO</h1>
                <p>Es el encargado de transformar en energía los alimentos, la digestión comienza en la boca, cuando 
                    masticamos el alimento, este se mezcla con la saliva formando el bolo alimenticio, pasa por la faringe 
                    y el esófago hasta el estómago, donde continuara la digestión gracias a los jugos gástricos que son 
                    capaces de deshacerlos, pasa al intestino delgado y luego al intestino grueso, en los intestinos se 
                    absorbe los nutrientes que el cuerpo necesita, los capilares del sistema que rodean los intestinos 
                    captan los nutrientes y los distribuyen por el cuerpo, finalmente se desechan los sólidos que han 
                    sobrado por la digestión por el ano.
                </p><br>
                <a href="digestivo.php">Jugar</a>
            </div>
            <div class="imagenli">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tpGk_MEhEN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="absolute"></div>
    </div>

<!--modo2-->
    <div class="contenelo2" id="cuarti">
        <div class="contenidin">
            <div class="textos2">
                <br><h1>SISTEMA RESPIRATORIO</h1>
                <p>Se encarga de la respiración, a través de la nariz o boca obtenemos el oxígeno que pasa por la faringe, 
                    laringe y tráquea hasta los pulmones: en los pulmones se intercambia el oxígeno por dióxido de carbono, 
                    los glóbulos rojos de la sangre son los que se encargan de llevar el oxígeno a todas las partes del 
                    cuerpo, el dióxido de carbono es una sustancia tóxica que tenemos que eliminar de nuestro cuerpo, 
                    haciendo el recorrido contrario de los pulmones. El dióxido de carbono es eliminado sin apenas darte 
                    cuenta.
                </p><br>
                <a href="respiratorio.php">Jugar</a>
            </div>
            <div class="imagenli">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ju28grqrnhE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="absolute2"></div>
    </div>


    

         <!--modo1-->
    <div class="contenelo" id="sobr">
        <div class="contenidin" id="quinti">
            <div class="textos">
                <br><h1>SISTEMA CIRCULATORIO</h1>
                <p>El corazón es el motor principal del sistema, el sistema circulatorio lleva la sangre a todas 
                    las partes del cuerpo, para cuidar el sistema circulatorio tienes que hacer ejercicio y tener una alimentación 
                    sana. Cada latido que da permite que la sangre llegue a todo el cuerpo. EL glóbulo rojo lleva oxígeno 
                    a las células para que puedan conseguir energía, los glóbulos blancos se encargan de eliminar las 
                    sustancias extrañas, las Plaquetas son para arreglar las venas y arterias que se rompen al hacernos 
                    una herida y así no perder sangre. Las arterias son los tubos que los trasportan desde el corazón 
                    hasta los órganos y las células, los capilares son tubos pequeños donde se intercambia el oxígeno y 
                    los alimentos, las venas son los que llevan de vuelta desde los órganos al corazón.
                </p><br>
                <a href="circulatorio.php">Jugar</a>
            </div>
            <div class="imagenli">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/jSPQQYESN5c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="absolute"></div>
    </div>

<!--modo2-->
    <div class="contenelo2" id="sext">
        <div class="contenidin">
            <div class="textos2">
                <br><h1>SISTEMA REPRODUCTIVO</h1>
                <p>El aparato reproductor es un conjunto de diferentes órganos encargados de la función vital de la 
                    reproducción. 
                    <br>
                    <br>Aparato reproductor masculino: la próstata, la vesícula(es el órgano que elabora el 
                    líquido donde están los espermatozoides), conducto deferente, el pene (que es el órgano genital externo 
                    del aparato reproductor masculino), uretra, testículos, escroto.
                    <br> 
                    <br> Aparato reproductor femenino: <br> útero; 
                    se encarga de recibir al óvulo fecundado, trompas de Falopio, el cuello uterino, ovarios; el órgano que 
                    fabrica los óvulos, la vagina.
                </p><br>
                <a href="reproductivo.php">Jugar</a>
            </div>
            <div class="imagenli">
                <iframe  src="https://www.youtube.com/embed/IOSV2qCQR3k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="absolute2"></div>
    </div>

            <!-- galerinininininininino-->

            <div class="panconcajeta burbi-amimedin">
                <div class="bolillo">
                    <span style="--i:1;"><a href="oseo.php"><img src="img/1.jpg" alt=""></a></span>
                    <span style="--i:2;"><a href="muscular.php"><img src="img/2.jpg" alt=""></a></span>
                    <span style="--i:3;"><a href="digestivo.php"><img src="img/3.jpg" alt=""></a></span>
                    <span style="--i:4;"><a href="respiratorio.php"><img src="img/4.jpg" alt=""></a></span>
                    <span style="--i:5;"><a href="circulatorio.php"><img src="img/5.jpg" alt=""></a></span>
                    <span style="--i:6;"><a href="reproductivo.php"><img src="img/6.jpg" alt=""></a></span>
                    <span style="--i:7;"><a href="#cero"><img src="img/7.jpg" alt=""></a></span>
                    <span style="--i:8;"><a href="#comen"><img src="img/8.jpg" alt=""></a></span>
                </div>
                <div class="burbujas">
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1 no"></div>
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1"></div>
                    <div class="burbuja burbuja1"></div>
                </div>
                
                
            </div>
            <div class="contenelo" id="sobr">
                <div class="contenidin">
                    <div class="textos">
                        <br><h1>Referencias</h1>
                        <p>Sánchez, A. F. P. J. J. (2020b, diciembre 4). 🥇 SISTEMA ÓSEO. -Esquelético-. Tipos de Huesos, clasificacion, función. [Vídeo]. YouTube. https://www.youtube.com/watch?v=wD6QXREmRrg&feature=youtu.be<br><br>

                            Sánchez, A. F. P. J. J. (2020, 3 diciembre). 🥇 SISTEMA MUSCULAR. Clasificación, Tipos y Generalidades. [Vídeo]. YouTube. https://www.youtube.com/watch?v=Sv5-QjFPVUQ&feature=youtu.be<br><br>
                            
                            Sánchez, A. F. P. J. J. (2022c, julio 6). 🥇 SISTEMA DIGESTIVO en 16 Minutos!!. ¡Fácil y Sencillo! [Vídeo]. YouTube. https://www.youtube.com/watch?v=tpGk_MEhEN0&feature=youtu.be <br><br>
                            
                            Sánchez, A. F. P. J. J. (2022b, julio 5). 🥇 APARATO RESPIRATORIO en 18 Minutos!!. ¡Fácil y Sencillo! [Vídeo]. YouTube. https://www.youtube.com/watch?v=ju28grqrnhE&feature=youtu.be<br><br>
                             
                            Sánchez, A. F. P. J. J. (2022, 4 julio). 🥇 SISTEMA CIRCULATORIO en 18 Minutos!! (Aparato Cardiovascular). ¡Fácil y Sencillo! [Vídeo]. YouTube. https://www.youtube.com/watch?v=jSPQQYESN5c&feature=youtu.be <br><br>
                            
                            Crece, C. (2020, 8 septiembre). CLASES VIRTUALES | 4to de Primaria | El aparato reproductor | Profesora Naara [Vídeo]. YouTube. https://www.youtube.com/watch?v=IOSV2qCQR3k&feature=youtu.be<br><br>

                            AnatomÃ­a FÃ¡cil por Juan JosÃ© SÃ¡nchez. (s. f.). YouTube. https://www.youtube.com/@anatomiafacil<br><br>

                            Fx, S. (2021, 6 abril). wa wa waaa Sonido/Audio (HD) SonidosFX [Vídeo]. YouTube. https://www.youtube.com/watch?v=79Ip3uwNHR0&feature=youtu.be<br><br>

                            Del Creador, E. R. (2019, 25 septiembre). Descargar Efecto de Sonido Acierto / Correcto en HD (Sin Copyright) [Vídeo]. YouTube. https://www.youtube.com/watch?v=GYefSfSrqyI&feature=youtu.be<br><br>

                        </p><br>
                        
                    </div>
                    <div class="imagenli">
                        <img src="img/lopini.png" alt="" >
                    </div>
                </div>
                
            </div>
    
            <!-- fin galerinininininininino-->

    <div class="masinf"><a href="https://www.youtube.com/@anatomiafacil" target="_blank">MÁS INFORMACIÓN</a></div>
    

    <!--FIN-Article-->

    <!--COMENTARIOS-->
    <div class="caja-comentario" id="comen">
        <div class="comentarios">
            <div class="la1"></div>
            <div class="la2">
                <form action="https://formsubmit.co/questionsthebody@gmail.com" method="POST" id="formulario">
                    <h2>COMENTARIOS</h2>
                    <input type="text" name="nombre" class="field" placeholder="Nombre:">
                    <input type="email" name="correo" class="field" placeholder="Correo:">
                    <input type="number" maxlength="10" name="telefono" class="field" placeholder="Telefono:">
                    <textarea name="mensaje" class="field" placeholder="Mensaje:" id="msj" ></textarea>
                    <input type="submit" class="envialo" placeholder="Enviar">
                </form>
            </div>
        </div>
    </div>

    <!--FOOTER-->

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
                        <a href="index.php"><div class="logolini">
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
    <script src="js/ini.js"></script>
   
</body>
</html>