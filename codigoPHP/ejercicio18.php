<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 18</title>
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

            /* Mapa de butacas del teatro */
            .teatro-scroll {
                overflow-x: auto;
                margin-bottom: 10px;
            }

            .teatro {
                display: inline-block;
                padding: 10px;
            }

            .escenario {
                text-align: center;
                color: #555;
                font-size: 12px;
                letter-spacing: 2px;
                border-bottom: 2px solid #cccccc;
                padding-bottom: 4px;
                margin-bottom: 10px;
            }

            .fila-teatro {
                display: flex;
                align-items: center;
                gap: 3px;
                margin-bottom: 3px;
            }

            .num-fila {
                width: 28px;
                margin-right: 4px;
                color: #888;
                font-size: 11px;
                text-align: right;
            }

            .butaca {
                display: inline-block;
                width: 16px;
                height: 14px;
                border: 1px solid #bbbbbb;
                border-radius: 3px;
                background-color: white;
                vertical-align: middle;
            }

            .butaca--ocupada {
                background-color: #777bb4;
                border-color: #777bb4;
            }

            .leyenda {
                color: #555;
                font-size: 13px;
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

                    <?php
                    /*
                     * Moisés Alberto Dominguez Cruz
                     * 07/10/2026
                     * 18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
                     */

                    /*
                     * Documentacion: https://www.php.net/manual/en/function.array-walk.php
                     */
                    $oTeatro = array_fill(0, 20, array_fill(0, 15, null));

                    $oTeatro[0][4] = "Carlos";
                    $oTeatro[3][11] = "Alberto";
                    $oTeatro[7][2] = "Raul";
                    $oTeatro[14][14] = "Juan";
                    $oTeatro[19][0] = "Juanmi";

                    // array_walk() recorre las filas del teatro y, dentro de cada una, otro array_walk() recorre sus butacas
                    echo '<h2>Recorrido con la funcion array_walk</h2>';
                    echo '<div class="teatro-scroll"><div class="teatro"><div class="escenario">ESCENARIO</div>';
                    array_walk($oTeatro, function ($fila, $iNumFila) {
                        echo '<div class="fila-teatro"><span class="num-fila">F' . ($iNumFila + 1) . '</span>';
                        array_walk($fila, function ($oPersona, $iNumAsiento) use ($iNumFila) {
                            // Si la butaca tiene nombre esta ocupada; al pasar el raton se ve quien la tiene
                            if ($oPersona !== null) {
                                echo '<span class="butaca butaca--ocupada" title="Fila ' . ($iNumFila + 1) . ', Asiento ' . ($iNumAsiento + 1) . ': ' . $oPersona . '"></span>';
                            } else {
                                echo '<span class="butaca" title="Fila ' . ($iNumFila + 1) . ', Asiento ' . ($iNumAsiento + 1) . ': libre"></span>';
                            }
                        });
                        echo '</div>';
                    });
                    echo '</div></div>';

                    echo '<p class="leyenda"><span class="butaca"></span> Libre &nbsp; <span class="butaca butaca--ocupada"></span> Ocupada (pasa el ratón por encima para ver quién)</p>';
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
