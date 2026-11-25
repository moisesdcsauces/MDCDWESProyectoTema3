<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 21 - Formulario</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Inter:wght@400;500;600;700;800&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../webroot/css/styles.css">
        <link rel="stylesheet" href="../webroot/css/estilos.css">

        <style>
            .enlace-volver {
                color: #474a8a;
                font-weight: bold;
                text-decoration: none;
                display: inline-block;
                margin-bottom: 20px;
            }

            .container {
                display: block;
                margin: 0 auto;
                background: white;
                padding: 30px;
                border-radius: 8px;
                max-width: 900px;
                width: 100%;
                text-align: left;
            }

            .container h2 {
                color: #777bb4;
                margin-top: 30px;
                margin-bottom: 15px;
                border-bottom: 2px solid #e9ecef;
                padding-bottom: 10px;
            }

            .container h3 {
                color: #474a8a;
                margin-top: 25px;
            }

            h2{
                color: #777bb4;
                text-align: center;
            }

            label{
                font-weight: bold;
            }

            form{
                display: block;
                margin: 0 auto; /* centra el formulario dentro del contenedor */
                width: fit-content; /* ocupa solo lo que mide el formulario */
                text-align: left;
            }

            input[type="text"],
            input[type="date"],
            input[type="number"] {
                margin-bottom: 20px;
            }

            input[type="submit"] {
                margin-top: 10px;
                font-weight: bold;
            }

            /* Fondo amarillo para campos obligatorios */
            input:required {
                background-color: #fff9c4;
            }

            /* Fondo blanco para campos opcionales */
            input:optional {
                background-color: #ffffff;
            }

            /* Fondo gris para campos bloqueados */
            input:disabled{
                background-color: #e0e0e0;
            }

            #nombre,#fechaNacimiento,#sueldo{
                background-color: #fff9c4;
                border:1px solid black;
            }
        </style>
    </head>
    <body class="pagina-ajustada">
        <header id="site-header" class="cabecera">
            <div class="cabecera__contenedor">
                <img class="monograma" src="../webroot/images/cruz.png" alt="">
                <h1 class="titulo-header">TEMA 3: Características del Lenguaje PHP</h1>
                <img class="monograma" src="../webroot/images/cruz.png" alt="">
            </div>
        </header>

        <main>
            <section>
                <div class="container">
                    <a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a>
                    <hr>

                    <!--
                    -- Moisés Alberto Dominguez Cruz
                    -- 08/10/2026
                    -- 21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
                    -- las preguntas y las respuestas recogidas. 
                    -->
                    <header>
                        <h2>Formulario de datos</h2>
                    </header>
                    <form name="formularioDatos" action="Tratamiento.php" method="post">

                        <!-- Campo de texto para el nombre. El for del label coincide con el id del input para que al pulsar el texto se seleccione el campo -->
                        <label for="nombre" >Nombre:</label>
                        <input type="text" name="nombre" id="nombre"/>
                        <br/>

                        <!-- Con type date el navegador saca un calendario y la fecha llega en formato año-mes-dia -->
                        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento"/>
                        <br/>

                        <!-- Campo numerico para el sueldo. Con step any deja meter decimales -->
                        <label for="sueldo">Sueldo:</label>
                        <input type="number" name="sueldo" id="sueldo" step="any"/>
                        <br/>

                        <!-- Boton que envia el formulario. Su name (submit) es el que comprueba Tratamiento.php para saber que vienen datos -->
                        <input type="submit" name="submit" id="submit" value="Enviar"/>
                    </form>
                </div>
            </section>
        </main>

        <footer class="pie">
            <div class="pie__redes">
                <a class="pie__red" href="../indexProyectoTema3.php" title="Ir al índice del Tema 3" aria-label="Ir al índice del Tema 3">
                    <img src="../webroot/images/icons/casa.png" alt="">
                </a>
                <a class="pie__red" href="https://github.com/moisesdcsauces/MDCDWESProyectoTema3" target="_blank" rel="noopener" aria-label="GitHub">
                    <img src="../webroot/images/icons/github.png" alt="">
                </a>
                <a class="pie__red" href="https://www.linkedin.com/in/mois%C3%A9s-alberto-dom%C3%ADnguez-cruz/" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <img src="../webroot/images/icons/linkedin.png" alt="">
                </a>
            </div>
            <p class="pie__texto">© <a class="titulo-enlace" href="https://moisesadomcru.ieslossauces.es/"> Moisés Alberto Domínguez Cruz</a> - IES Los Sauces<span id="year"></span></p>
        </footer>

        <script src="../webroot/js/main.js" defer></script>
    </body>
</html>
