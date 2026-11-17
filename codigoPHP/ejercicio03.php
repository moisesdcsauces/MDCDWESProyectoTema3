<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 03</title>
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
                     * 05/10/2026
                     * 3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)
                     */
                    //Poner la zona por defecto en Europa/Madrid
                    date_default_timezone_set('Europe/Madrid');
                    //Inicializar la variable $oFechaActual de tipo DateTime.
                    $dFechaActual = new DateTime();
                    //format("M") y format("l") sacan el mes y el dia en ingles, asi que se traducen con estos arrays.
                    //format("n") devuelve el mes del 1 al 12 y format("w") el dia de la semana del 0 (domingo) al 6 (sabado)
                    $aMeses = [1 => 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
                    $aDiasSemana = ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'];
                    //Mostrar el dia, mes anyo y hora actual
                    echo '<p>Hoy es ' . $aDiasSemana[$dFechaActual->format("w")] . ', ' . $dFechaActual->format("d") . ' de ' . $aMeses[$dFechaActual->format("n")] . ' de ' . $dFechaActual->format("Y") . ' y son las ' . $dFechaActual->format("H:i") . ' horas</p>';
                    //Mostrar la fecha con /
                    echo "La fecha de hoy es " . $dFechaActual->format("d/m/Y");
                    echo '</br>';
                    //Mostrar la fecha con -
                    echo "La fecha de hoy es " . $dFechaActual->format("d-m-Y");
                    echo '</br>';
                    //Mostrar el anyo
                    echo "El año actual es " . $dFechaActual->format("Y");
                    echo '</br>';
                    //Mostrar el dia de la semana
                    echo "El dia de la semana es " . $aDiasSemana[$dFechaActual->format("w")];
                    echo '</br>';
                    //Mostrar la hora
                    echo "La hora actual es " . $dFechaActual->format("H:i");
                    echo '</br>';
                    //Mostrar la marca de tiempo actual
                    echo "La marca de tiempo actual es " . $dFechaActual->getTimestamp();
                    echo '</br>';
                    //Inicializar la variable $oFechaCumpleanos
                    $dFechaCumpleanos = new DateTime('1999-06-09');
                    //Mostrar la fecha de cumpleaños con /
                    echo '</br>';
                    echo "La fecha de nacimiento es " . $dFechaCumpleanos->format("d/m/Y");
                    echo '</br>';
                    //Mostrar la fecha con -
                    echo "La fecha de nacimiento es " . $dFechaCumpleanos->format("d-m-Y");
                    echo '</br>';
                    //Mostrar el año
                    echo "El año de nacimiento es " . $dFechaCumpleanos->format("Y");
                    echo '</br>';
                    //Mostrar el dia de la semana de nacimiento
                    echo "El dia de la semana de nacimiento es " . $aDiasSemana[$dFechaCumpleanos->format("w")];
                    echo '</br>';

                    // Ponerlo con los colores del 2
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
