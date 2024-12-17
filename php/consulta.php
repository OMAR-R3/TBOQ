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
    <style>
        .tablin{
            text-align: center;
        }

        .tablin td{
            padding: 10px;
        }

        .cajatab{

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cajatab table{
            width: 80%;
        }

        #global {
            width: 80%;
        }

        .caja-exam .box-titulo{
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }
        .caja-exam .box-titulo label{
            font-size: 21px;
            text-align: center;
            color: #fd7e00;
            font-weight: 700;

        }

        .caja-btn{
            display: flex;
            justify-content: center;
        }
        .caja-btn button{
            margin: 10px 15px;
            padding: 10px;
            border: 1px solid transparent;
            background: #ffffa6;
            border-radius: 10px;
            transition: all 0.5s;
            color: #000;
            cursor: pointer;
        }
        .caja-btn button:hover{
            transform: scale(.8);
            color: #c0c0c0;
        }
        .caja-btn button a{
            text-decoration: none;
            color: #000;
            transition: all 0.5s;
        }
        .caja-btn button a:hover{
            color: #c0c0c0;
        }

        /*forms */
        .box-busqueda .box-titulo{
            width: 100%;
            text-align: center;
            margin: 10px 0;
        }
        
        .box-busqueda .box-titulo label{
            font-size: 21px;
            text-align: center;
            color: #fd7e00;
            font-weight: 700;

        }

        .box-busqueda form input{
            width: 20%;
            height: 30px;
            background-color: rgba(197, 197, 197, 0.6);
            border: 2px solid rgba(0, 0, 0, 0);
            padding: 0.5rem 1rem;
            outline: none;
            transition: all 0.5s;
        }

        .box-busqueda form select{
            width: 30%;
            height: 50px;
            background-color: rgba(197, 197, 197, 0.6);
            border: 2px solid rgba(0, 0, 0, 0);
            padding: 0.5rem 1rem;
            outline: none;
            transition: all 0.5s;
            cursor: pointer;
        }

        .box-busqueda .box-correo form .correo{
            width: 40%;
            margin-bottom: 10px;
            margin-top: 5px;
        }

        .box-busqueda{
            width: 100%;
        }
        .box-gra,.box-correo {
            margin: 10px 15%;
            width: 70%;
            text-align: center;
        }

        .box-busqueda form input:focus ,select:focus{
            background-color: #fff;
            border: 2px solid rgba(30, 85, 250, 0.47);
        }

        .box-busqueda form .envio{
            background: rgb(76, 192, 212);
            color: #fff;
            width: 30%;
            height: 35px;
            cursor: pointer;
            border-radius: 5px;
            transition: all 1s;
        }
        .box-busqueda form .envio:hover{
            background: rgb(42, 205, 234);
            color: #dbdbdb;
            transform: scale(0.8);
        }


        /*fin forms */

        /* caja promedio */

        .box-prom{
            width: 100%;
        }
        .box-prom .promedio{
            margin: 10px 35%;
            width: 30%;
            height: 50px;
            background: rgb(28,220,255);
            background: linear-gradient(325deg, rgba(28,220,255,0.8438725832129726) 31%, rgba(32,241,143,0.9475140397956058) 78%);
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;

            border-radius: 25px;
        }

        /* fin caja promedio */

        /*consulta general */

        .box-consul{
            width: 100%;
        }

        .box-consul form{
            width: 100%;
        }

        .box-consul  .par-1{
            display: flex;
        }

        .box-consul  .par-1 div{
            background: yellow;
            width: 20%;
            border: 1px solid #000;
            text-align: center;
            display: table-cell; 
            vertical-align: middle;

        }

        .box-consul  .par-1 .uno{
            width: 15%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul  .par-1 .dos{
            width: 5%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul  .par-1 .tres{
            width: 6%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul  .par-1 .cuatro{
            width: 13%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul  .par-1 .cinco{
            width: 5%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul  .par-1 .seis{
            width: 5%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul  .par-1 .siete{
            width: 5%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul  .par-1 .ocho{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .nueve{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul  .par-1 .dies{
            width: 10%;
            border: 1px solid #000;
        }

        .box-consul form .par-2{
            display: flex;
        }

        /*.box-consul form .par-2 div{
            width: 20%;
            border: 1px solid #000;
        }*/
        .box-consul form .par-2 .uno{
            width: 15%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .dos{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .tres{
            width: 6%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .cuatro{
            width: 13%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .cinco{
            width: 5%;
            border: 1px solid #000;
            font-size: 12px;
        }
        .box-consul form .par-2 .seis{
            width: 5%;
            font-size: 12px;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .siete{
            width: 5%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .ocho{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .nueve{
            width: 10%;
            border: 1px solid #000;
        }
        .box-consul form .par-2 .dies{
            width: 10%;
            border: 1px solid #000;
        }

        .box-consul form .par-2 .div{
            background: rgb(76, 192, 212);
            color: #fff;
            width: 100%;
            height: 100%;
            cursor: pointer;
            transition: all 1s;
        }
        .box-consul form .par-2 .div:hover{
            background: rgb(42, 205, 234);
            color: #dbdbdb;
            transform: scale(0.8);
            border-radius: 25px;
        }

        .box-consul form div{
            text-align: center;
            display: table-cell; 
            vertical-align: middle;
        }



        /*fin consulta general */

    

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
        .box-prom .promedio{
                margin: 10px 30%;
                width: 40%;
            }
        /* MENUSITILLO */
        .icono{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            background: transparent;
            z-index: 999;
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
            z-index: 998;
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
        <li><label for="btn-modal">
                <a href="sesion_prof.php"><input class="logi" type="button" value="SALIR"></a>
            </label></li>
        </ul> 
    </header>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="../index.php">INICIO</a>
                <a href="../login.php">LOGIN</a>
                <li class="li"><div class="so" onclick="alert('Somos THE BODY OF QUESTION, esta es una página de preguntas sobre el cuerpo humano, el cual te darán diferentes preguntas de los diferentes sistemas del cuerpo humano y descubre más sobre el tema.');">NOSOTROS</div></li>
                <li class="li"><div class="so" onclick="alert('Tienes que hacer un número de preguntas del cuerpo humano el cual te dará una calificación con tu puntaje más alto, dando clic en el botón de jugar, direccionándote al juego de preguntas.');">¿DE QUE TRATA?</div></li>
            
            </nav>
            <label for="btn-menu">✖️    </label>
        </div>
    </div>
    <!--FIN-MENU-->

    <div class="lip2">.</div>
    
    <!--Article-->
<br>
            <div id="logo" style="width: 100%; height: 100%; text-align:center;">
                <h1>TABLA DE RESULTADOS</h1>
            </div>

            <div class="clearfix"></div>

 
        

        <!-- Contenido -->


        <!-- busquedas -->

        <div class="box-busqueda">
            <div class="box-titulo">
                <label>BUSQUEDAS</label>
            </div>

            <div class="box-gra">
                <form action="consulta_gradgrup.php" method="post">
                    <select name="grado" placeholder="grado" required>
                        <option value="1">1 - Primer Semestre</option>
                        <option value="2">2 - Seguno Semestre</option>
                        <option value="3">3 - Tercer Semestre</option>
                        <option value="4">4 - Cuarto Semestre</option>
                        <option value="5">5 - Quinto Semestre</option>
                        <option value="6">6 - Sexto Semestre</option>
                    </select>

                    <input type="text" name="grupo" maxlength="1" required placeholder="Grupo:">

                    <select name="turno"placeholder="Turno" required>
                        <option value="Matutino">Turno Matutino</option>
                        <option value="Vespertino">Turno Vespertino</option>
                    </select>
                    <br>
                    <input type="submit" name="enviar" value="Buscar" class="envio">
                </form>
            </div>

            <div class="box-correo">
                <form action="consult_correo.php" method="post">
                    <input type="mail" name="correo" placeholder="Correo:" required class="correo">
                    <br>
                    <input type="submit" name="enviar" value="Buscar" class="envio">
                </form>
            </div>

        </div>
        <?php
        
        $conexion = mysqli_connect("localhost", "root", "", "tboq") or die("Problemas con la conexion");

            $registros = mysqli_query($conexion, "SELECT nombreAlumno,grado,grupo,turno,correo,fecha,hora,fecha2,hora2,fecha3,hora3,fecha4,hora4,fecha5,hora5,fecha6,hora6,r1,r2,r3,r4,r5,r6 from tboq_calificaciones") or die("Problemas en el select:" . mysqli_error($conexion));
            $prom=0;
            $alum=0;

        ?>

    
        <!-- consultas generales -->



        <div class="box-consul" style="width: 100%;">
        <div class="par-1">
                    <div class="uno">Estudiante</div>
                    <div class="dos">Grado - Grupo</div>
                    <div class="tres">Turno</div>
                    <div class="cuatro">Correo</div>

                    <div class="cinco">Fecha Oseo</div>
           
                    <div class="siete">Calificación Oseo</div>

                    <div class="cinco">Fecha Muscular</div>
         
                    <div class="siete">Calificación Muscular</div>

                    <div class="cinco">Fecha Digestivo</div>
    
                    <div class="siete">Calificación Digestivo</div>

                    <div class="cinco">Fecha Respiratorio</div>
  
                    <div class="siete">Calificación Respiratorio</div>

                    <div class="cinco">Fecha Circulatorio</div>
      
                    <div class="siete">Calificación Circulatorio</div>

                    <div class="cinco">Fecha Reproductivo</div>
                
                    <div class="siete">Calificación Reproductivo</div>

                    <div class="siete">Promedio</div>
                </div>
            <?php

                while($reg = mysqli_fetch_array($registros)){
            ?>
            <form action="consultaindividual.php" method="post">
                <!--parte 1-->


                <!--parte 2-->
                <div class="par-2">
                    <div class="uno"><?php echo $reg['nombreAlumno'];?></div>
                    <div class="dos"><?php echo $reg['grado']." - ".$reg['grupo'];?></div>
                    <div class="tres"><?php echo $reg['turno']?></div>
                    <div class="cuatro"><input type="text" value="<?php echo $reg['correo'];?>"></div>

                    <div class="cinco"><?php echo $reg['fecha'];?></div>
    
                    <div class="siete"><?php echo $r1=$reg['r1'];?></div>

                    <div class="cinco"><?php echo $reg['fecha2'];?></div>
     
                    <div class="siete"><?php echo $r2=$reg['r2'];?></div>

                    <div class="cinco"><?php echo $reg['fecha3'];?></div>
            
                    <div class="siete"><?php echo $r3=$reg['r3'];?></div>

                    <div class="cinco"><?php echo $reg['fecha4'];?></div>
               
                    <div class="siete"><?php echo $r4=$reg['r4'];?></div>

                    <div class="cinco"><?php echo $reg['fecha5'];?></div>
                
                    <div class="siete"><?php echo $r5=$reg['r5'];?></div>

                    <div class="cinco"><?php echo $reg['fecha6'];?></div>
                  
                    <div class="siete"><?php echo $r6=$reg['r6'];?></div>

                    <?php
                    $alum++;
                    $promedio= ($r1)+($r2)+($r3)+($r4)+($r5)+($r6);
                    $promescue=($promedio/6);
                    $promgene = bcdiv($promescue, '1', 1);
                    ?>
                    <div class="siete"><?php echo $promgene;?></div>
                </div>
            </form>
            <?php
                $prom=$prom+$promescue;
               }
               
               $promes=($prom/($alum));
               $promes = bcdiv($promes, '1', 1);
            ?>
        </div>


        <!-- promedio escolar -->

        <div class="box-prom">
            <div class="promedio"><label>Promedio - Escuela: <?php echo $promes;?></label></div>
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
                            <img src="../img/lopini.png" alt="">
                        </div></a>
                    </div>
        
                    <div class="cajifooterini">
                        <h2>Menú</h2>
                        <a href="../index.php">INICIO</a> 
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