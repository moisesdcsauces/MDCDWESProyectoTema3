<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 12 - Variables Superglobales</title>
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

            /* Estilo para print_r */
            pre {
                background-color: #2d2d2d;
                color: #a6e22e;
                padding: 15px;
                border-radius: 5px;
                overflow-x: auto;
                font-size: 14px;
                line-height: 1.5;
            }

            /* Estilo para las tablas del foreach */
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 15px;
                margin-bottom: 30px;
            }

            th, td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #777bb4;
                color: white;
                font-weight: bold;
            }

            tr:nth-child(even) {
                background-color: #f8f9fc;
            }

            .vacio {
                color: #999;
                font-style: italic;
                padding: 10px;
                background-color: #f8f9fc;
                border-radius: 4px;
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
                    <!--
                    -- Moisés Alberto Dominguez Cruz
                    -- 03/11/2026
                    -- Ejercicio 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())
                    -->
                    <a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a>
                    <hr>

                    <?php
                    // Iniciamos sesion para asegurar que la variable $_SESSION este disponible
                    session_start();
                    $_SESSION['usuario_prueba'] = 'Moises_Alberto'; // Dato de prueba
                    
                    // MOSTRAR _SERVER CON PRINT_R
                    echo "<h2>1. Variable superglobal \$_SERVER formateada con print_r()</h2>";
                    echo "<pre>";
                    print_r($_SERVER);
                    echo "</pre>";

                    // RECORRIDO DE TODAS LAS SUPERGLOBALES CON FOREACH
                    echo "<h2>2. Recorrido de todas las Superglobales con foreach()</h2>";

                    // Array maestro con todas las variables superglobales de PHP
                    $aSuperglobales = [
                        '$_SERVER'  => $_SERVER,
                        '$_REQUEST' => $_REQUEST,
                        '$_GET'     => $_GET,
                        '$_POST'    => $_POST,
                        '$_FILES'   => $_FILES,
                        '$_COOKIE'  => $_COOKIE,
                        '$_SESSION' => isset($_SESSION) ? $_SESSION : [],
                        '$_ENV'     => $_ENV
                    ];

                    // Recorremos el array
                    foreach ($aSuperglobales as $nombreSuperglobal => $arraySuperglobal) {
                        echo "<h3>Contenido de $nombreSuperglobal</h3>";

                        // Comprobamos si la superglobal tiene datos dentro
                        if (!empty($arraySuperglobal)) {
                            echo "<table>";
                            echo "<tr><th>Nombre</th><th>Contenido</th></tr>";
                            
                            // Recorremos el contenido real de la superglobal
                            foreach ($arraySuperglobal as $clave => $valor) {
                                // Si el valor es un array, se convierte a texto para que no de error
                                if (is_array($valor)) {
                                    $valor = "<pre>" . print_r($valor, true) . "</pre>";
                                }
                                echo "<tr>";
                                echo "<td><strong>$clave</strong></td>";
                                echo "<td>$valor</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            // Si esta vacia, mostramos un mensaje indicandolo
                            echo "<div class='vacio'>La variable $nombreSuperglobal esta vacia en este momento.</div>";
                        }
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

