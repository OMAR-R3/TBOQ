<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/scroll.css">
    <link rel="shortcut icon" href="../img/lopini.png">
    <style>
        /*- login*/

        label{
            position: absolute;
            top: 5px;
            right: 5px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .cer{
            color: rgb(0, 77, 186);
            width: 40px;
            height: 40px;
        }
        .contenido{
            margin: 50px auto;
            text-align: center;
        }

        /*login*/

        .contenido form input{
        display: block;
        margin: 15px auto;
        width: 50%;
        height: 30px;
        background-color: rgba(197, 197, 197, 0.6);
        border: 2px solid rgba(0, 0, 0, 0);
        padding: 0.5rem 1rem;
        outline: none;
        transition: all 0.5s;
        font-size: 15px;
        }

        .contenido form select{
        display: block;
        margin: 15px auto;
        width: 50%;
        height: 50px;
        background-color: rgba(197, 197, 197, 0.6);
        border: 2px solid rgba(0, 0, 0, 0);
        padding: 0.5rem 1rem;
        outline: none;
        transition: all 0.5s;
        cursor: pointer;
        }

        .contenido form input:focus ,select:focus{
        background-color: #fff;
        border: 2px solid rgba(30, 85, 250, 0.47);
        }

        .contenido form .envio{
        background: rgb(76, 192, 212);
        color: rgb(73, 73, 73);
        width: 40%;
        height: 35px;
        cursor: pointer;
        border-radius: 5px;
        transition: all 1s;
        }
        .contenido form .envio:hover{
        background: rgb(42, 205, 234);
        color: rgb(0, 0, 0);
        transform: scale(0.8);
        }

        .active{
        display: none;
        visibility: hidden;
        }

        .contenido .opciones{
        font-size: 13px;
        }

        .oplo{
        background-color: transparent;
        border-style: none;
        cursor: pointer;
        color: rgb(0, 8, 255);
        font-size: 13px;
        transition: all 0.5s;
        }

        .oplo:hover{
        background-color: transparent;
        border-style: none;
        cursor: pointer;
        color: rgb(255, 0, 0);
        transform: scale(1.1);
        }

        /*fin login*/

        .creado{
            color: blue;
            text-align: center;
        }

        .repe{
            color: red;
            text-align: center;
        }

        /* MENUSITILLO */

        .menu{
        background: #3aad9a74;
        width: 100%;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        left: 0;
        top: 0;
        z-index: 999;
    }
    .menu nav{
        height: 50px;
        display: flex;
        justify-content: flex-end;
        width: 100%;
        z-index: 999;
        border-top: 2px solid rgb(92, 92, 92);
        border-bottom: 1px solid transparent;
        
    }
    .icono{
        display: none;
    }
    .enlaces{
        display: flex;
        height: 100%;
        width: 20%;
        justify-content: flex-end;
        align-items: center;
    }
    .enlaces .enla{
        padding: 10px 15px;
        transition: all 0.7s ease-out;
        color: #fff;
        text-decoration: none;
        margin: 0 10px;
        text-align: center;
    }
    .enlaces .enla:hover{
        transform: scale(.9);
        color: #000;
        background: #fff;
        border-radius: 25px;
    }

    /* FIN MENUSITILLO */


    @media (max-width:1000px){
        /* MENUSITILLO */
        .icono{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            background: transparent;
            z-index: 100;
            cursor: pointer;
            margin-right: 10px;
        }
        .menu .textos h1{
            font-size: 70px;
        }
        .menu nav{

            justify-content: end;
            
        }
        .men{
            height: 50px;
            width: 50px;
        }

        .enlaces{
            position: fixed;
            height: 100vh;
            right: 0;
            width: 100%;
            flex-direction: column;
            transition: all 1s ease;
            background: #0575E6;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #021B79, #0575E6);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #2f4ec0, #0575E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            font-size: 25px;

            justify-content: center;
        }
        .uno{
            clip-path: circle(0% at 100% 0%);
        }
        .dos{
            clip-path: circle(150% at 100% 0%);
        }
        .enlaces a{

            margin: 20px 0;
        }
        /* FIN MENUSITILLO */
    }
    </style>
    <title>INICIO</title>
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
        <a href="../index.php"><img src="../img/umi2.png" alt="" class="logo"></a>
        <!--eslogan-->
        <a href="../index.php"><h2 class="eslogan">How do you see, if you know?</h2></a>
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
                <a href="../index.php">INICIO</a>
                <a href="../oseo.php">OSEO</a>
                <a href="../muscular.php">MUSCULAR</a>
                <a href="../digestivo.php">DIGESTIVO</a>
                <a href="../respiratorio.php">RESPIRATORIO</a>
                <a href="../circulatorio.php">CIRCULATORIO</a>
                <a href="../reproductivo.php">REPRODUCTIVO</a>
                <a href="../login.php">LOGIN</a>
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

     
<br>
            <div id="logo" style="width: 100%; height: 100%; text-align:center;">
                <h1>ALUMNOS</h1>
            </div>



        <!-- Contenido -->

    <div class="contenido">

        <div class="regis active" id="reg">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
                <h3>REGISTRARSE</h3>
                <input type="text" required placeholder="Nombre:" name="nombre" id="Nombre">
                <select placeholder="Grado:" name="grado" id="grado" required>
                    <option value="1">1 - Primer Semestre</option>
                    <option value="2">2 - Segundo Semestre</option>
                    <option value="3">3 - Tercer Semestre</option>
                    <option value="4">4 - Cuarto Semestre</option>
                    <option value="5">5 - Quinto Semestre</option>
                    <option value="6">6 - Sexto Semestre</option>
                </select>


                <input type="text" maxlength="1" required placeholder="Grupo:" name="grupo" id="grupo">

                <select name="turno" id="turno" placeholder="Turno" required>
                        <option value="Matutino"  style="color: black;"> Turno Matutino</option>
                        <option value="Vespertino"  style="color: black;">Turno Vespertino</option>
                </select>


                <input type="email" required placeholder="Correo:" name="correo" id="Correo">
                <input type="text" required placeholder="Crea un id de usuario:" name="usuario" id="Usuario">
                <input type="text" required placeholder="Crea una contraseña, con 10 caracteres" minlength="10" maxlength="10"  name="contra" id="Contraseña">
                <input class="envio" type="submit" name="enviando" value="Registrarse">
            </form>
            <p class="opciones">Si ya estas registrado <button class="oplo" id="btn_registro">Inicia Sesión.</button></p>
        </div>

        <div class="inicia" id="ini">
            <form action="index.php"  method="post">
                <h3>INICIAR SESIÓN</h3>
                <input type="text" required placeholder="Usuario:" name="usuario">
                <input type="password" required placeholder="Contraseña:"  minlength="10" maxlength="10" name="contra">
                <input class="envio" type="submit" value="Iniciar Sesión" name="enviarsesion">
            </form>
            <p class="opciones">Crea una <button class="oplo" id="btn_sesion">Cuenta nueva.</button></p>
        </div>

    </div>


<?php

    if(isset($_POST["enviando"])){
        include("alta.php");
    }
?>


<script>
/*cambio de login */
var btn_registro=document.getElementById('btn_registro'); 
var btn_sesion=document.getElementById('btn_sesion'); 
var registro=document.getElementById('reg'); 
var sesion=document.getElementById('ini'); 


btn_registro.addEventListener('click',function(){
sesion.classList.remove("active");
registro.classList.add("active");
});

btn_sesion.addEventListener('click',function(){
sesion.classList.add("active");
registro.classList.remove("active");
});





/*fin cambio de login */

</script>
    

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
                        <a href="../index.php">INICIO</a>
                        <a href="../oseo.php">OSEO</a>
                        <a href="../muscular.php">MUSCULAR</a>
                        <a href="../digestivo.php">DIGESTIVO</a>
                        <a href="../respiratorio.php">RESPIRATORIO</a>
                        <a href="../circulatorio.php">CIRCULATORIO</a>
                        <a href="../reproductivo.php">REPRODUCTIVO</a>   
                        <a href="../login.php">LOGIN</a>        
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
    <script src="../js/ini.js"></script>
   
</body>
</html>