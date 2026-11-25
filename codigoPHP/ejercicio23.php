<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 23 - Formulario</title>
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
                margin: 0 auto;
                width: fit-content;
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

            input[type="text"] {
                margin-bottom: 10px;
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
            input {
                background-color: #fff9c4;
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
                    -- 12/10/2026
                    -- 23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                    -- recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
                    -->
                    <?php
                    // Importacion de la libreria
                    require_once '../core/231018libreriaValidacion.php';

                    // Inicializacion de variables
                    $entradaOK = true; // Variable que nos indica que todo va bien.
                    $aErrores = ['nombre' => '',
                        'apellidos' => '']; // Array donde recogemos los mensajes de error.
                    $aRespuestas = ['nombre' => '',
                        'apellidos' => '']; // Array donde recogeremos la respuestas correctas (si $entradaOK).
                    // Para cada campo del formulario: Validar entrada y actuar en consecuencia
                    if (isset($_POST['enviar'])) {

                        // Validacion 
                        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_POST["nombre"], 100, 1, 1);
                        $aErrores['apellidos'] = validacionFormularios::comprobarAlfabetico($_POST["apellidos"], 150, 1, 1);

                        foreach ($aErrores as $valor) {
                            if (!empty($valor)) {
                                $entradaOK = false;
                            }
                        }
                    } else {
                        $entradaOK = false;
                    }

                    if ($entradaOK) {
                        // cargar la variable $aRespuestas y tratamiento de datos OK
                        $aRespuestas['nombre'] = $_POST["nombre"];
                        $aRespuestas['apellidos'] = $_POST["apellidos"];

                        echo "<h2>Datos del formulario</h2>";

                        foreach ($aRespuestas as $campo => $valor) {
                            echo "<p>$campo: <b>$valor</b></p>";
                        }

                        // Rellenar otro formulario
                        echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
                    } else {
                        ?>    

                        <!-- Mostrar formulario -->
                        <form name="input" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                            <!-- Mostrar los datos tecleados correctamente en intentos anteriores (en los value) -->
                            Nombre: <input type="text" name="nombre" value=""/>
                            <?php
                            // Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
                            if ($aErrores['nombre'] != '') {
                                echo "<span style='color:red; display:block; font-size:13px;'>" . $aErrores['nombre'] . "</span>";
                            }
                            ?>
                            <br>

                            Apellidos: <input type="text" name="apellidos" value=""/>
                            <?php
                            if ($aErrores['apellidos'] != '') {
                                echo "<span style='color:red; display:block; font-size:13px;'>" . $aErrores['apellidos'] . "</span>";
                            }
                            ?>
                            <br>

                            <p><input type="submit" name="enviar" value="Enviar"/></p>
                        </form>

                        <?php
                    } // Fin si ($entradaOK)
                    ?>
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
