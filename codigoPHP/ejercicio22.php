<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 22 - Formulario</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Inter:wght@400;500;600;700;800&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../webroot/css/styles.css">
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
                background: white;
                padding: 30px;
                border-radius: 8px;
            }

            /* Estilo para cuando se muestran los resultados */
            .resultados {
                display: inline-block;
                text-align: left;
                background: white;
                padding: 30px;
                border-radius: 8px;
                max-width: 600px;
                width: 100%;
            }

            pre {
                background: #f0f0f0;
                padding: 10px;
                border-radius: 5px;
                text-align: left;
            }

            input[type="text"],
            input[type="date"],
            input[type="number"] {
                margin-bottom: 20px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: 100%;
                box-sizing: border-box;
            }

            input[type="submit"] {
                margin-top: 10px;
                font-weight: bold;
                padding: 10px;
                width: 100%;
                background-color: #777bb4;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #5c6096;
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
            input:disabled {
                background-color: #e0e0e0;
            }
        </style>
    </head>
    <body class="pagina-ajustada">
        <header id="site-header" class="cabecera">
            <div class="cabecera__contenedor">
                <img class="monograma" src="../../webroot/images/cruz.png" alt="">
                <h1 class="titulo-header">TEMA 3: Características del Lenguaje PHP</h1>
                <img class="monograma" src="../../webroot/images/cruz.png" alt="">
            </div>
        </header>

        <main>
            <section>
                <div class="container">
                    <a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a>
                    <hr>

                    <!--
                    -- Moisés Alberto Dominguez Cruz
                    -- 12/10/2026
                    -- 22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.
                    -->
                    <?php
                    // IF para pedir los datos 
                    if (isset($_REQUEST['submit'])) {
                        // Variables y el valor asignado que recoge.
                        $sNombre = $_REQUEST['nombre'];
                        print_r('El nombre es: ' . $sNombre);
                        echo '<br>';

                        $sApellidos = $_REQUEST['apellidos'];
                        print_r('Los apellidos son: ' . $sApellidos);
                        echo '<br>';

                        // Contenido con print_r de las variables $_REQUEST
                        echo '<p>Contenido de $_RESQUEST: </p>';
                        echo '<pre>';
                        print_r($_REQUEST);
                        echo '</pre>';

                        // Contenido con print_r de las variables $_GET
                        echo '<p>El contenido de $_GET: </p>';
                        echo '<pre>';
                        print_r($_GET);
                        echo '</pre>';

                        // Contenido con print_r de las variables $_POST
                        echo '<p>El contenido de $_POST: </p>';
                        echo '<pre>';
                        print_r($_POST);
                        echo '</pre>';

                        echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
                    } else {
                        // Los datos se guardan en el mismo archivo y se muestran en la misma pagina.
                        // Se pide el nombre y apellidos que son de tipo text.
                        ?>
                        <header>
                            <h2>Formulario de datos</h2>
                        </header>
                        <form name="input" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                            <label for="nombre" >Nombre: </label>
                            <input type="text" name="nombre" id="nombre"/>
                            <br/>

                            <label for="apellidos">Apellidos: </label>
                            <input type="text" name="apellidos" id="apellidos"/>
                            <br/>

                            <input type="submit" name="submit" id="submit" value="Enviar"/>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </section>
        </main>

        <footer class="pie">
            <div class="pie__redes">
                <a class="pie__red" href="../indexProyectoTema3.php" title="Ir al índice del Tema 3" aria-label="Ir al índice del Tema 3">
                    <img src="../../webroot/images/icons/casa.png" alt="">
                </a>
                <a class="pie__red" href="https://github.com/moisesdcsauces/MDCDWESProyectoTema3" target="_blank" rel="noopener" aria-label="GitHub">
                    <img src="../../webroot/images/icons/github.png" alt="">
                </a>
                <a class="pie__red" href="https://www.linkedin.com/in/mois%C3%A9s-alberto-dom%C3%ADnguez-cruz/" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <img src="../../webroot/images/icons/linkedin.png" alt="">
                </a>
            </div>
            <p class="pie__texto">© <a class="titulo-enlace" href="../../index.html"> Moisés Alberto Domínguez Cruz</a> - IES Los Sauces<span id="year"></span></p>
        </footer>

        <script src="../../webroot/js/main.js" defer></script>
    </body>
</html>
