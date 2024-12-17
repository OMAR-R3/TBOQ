
<?php

if(isset($_POST["profe"])){
    include("php/veri_contra.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="shortcut icon" href="img/lopini.png">
    <style>
        /*login*/
        .textos{
            text-align: center;
        }

        .envio {
            width: 50%;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
            background-color: rgba(98, 197, 255, 0.8);
            cursor: pointer;
            outline: none;
            border: none;
            transition: all 0.5s;
        }    
            
        .envio:hover {
            width: 60%;
            border-radius: 25px;
            background-color: rgb(81, 191, 255);
        }
        .pass:hover {
            background-color: rgba(0, 0, 0, 0.1);
            border: 2px solid rgb(81, 191, 255);
        }
        .pass {
            text-align: center;
            width: 60%;
            padding: 0.5rem 1rem;
            outline: none;
            border: 2px solid rgba(0, 0, 0, 0);
            background-color: rgba(197, 197, 197, 0.6);
            font-size: 1.1rem;
            margin-bottom: 22px;
            transition: all 0.5s;
        }
            
        @media screen and (max-width:1200px){
            .imgl{
                height: 300px;
            }

        }
        /*login*/
    </style>
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

     <!--modo1-->
    <div class="contenelo" id="sobr">
        <div class="contenidin" id="pri">
            <div class="textos">
                <br><h1>INICIO/RESGISTRO</h1>
                <div class="box-alumno">
                    <form action="php/sesion.php" method="post">
                    <input type="submit" value="Alumnos" name="alum"  class="envio"><br>
                    </form>
                </div><br>
                <hr class="linea">
                    <!--profesor--> <br>
                <div class="box-prof">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="password" maxlength="10" placeholder="Ingresa la contraseña para docentes:" name="contraprof" class="pass">
<br>
                    <input type="submit" value="Docentes" name="profe" class="envio">
                    </form>
                </div>
            </div>
            <div class="imagenli">
                <img src="img/lopini.png" alt="logo" class="imgl">
            </div>
        </div>

    </div>


    

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