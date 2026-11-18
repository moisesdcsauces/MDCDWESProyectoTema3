<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
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

            .nombre{
                color: red;
                font-weight: bold;
            }
            .tipo{
                color: green;
                font-weight: bold;
            }
            .valor{
                color: blue;
                font-weight: bold;
            }
            h3{
                color: #474a8a;
            }

            /* Caja para el var_dump de los arrays y objetos */
            .volcado {
                background-color: #f4f4fb;
                color: #000000;
                border-left: 3px solid #777bb4;
                padding: 10px 15px;
                border-radius: 5px;
                overflow-x: auto;
                font-size: 13px;
                margin-top: 0;
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
                     * Moisés Alberto Domínguez Cruz
                     * 30/09/2026
                     * 1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).
                     */

                    // Variables de cada tipo con una asignacion. Toca acostumbrarse a poner el tipo de dato en minuscula y el nombre de la variable (y que tenga sentido).
                    $bRespuesta = true; //b de boolean.
                    $iEdad = 27; //i de Integer.
                    $fSueldoHora = 15.50; //f de Float.
                    $sNombre = "Moisés Alberto Domínguez Cruz"; //s de String.
                    $vNull = null;

                    echo "<h3>Variables con funcion: echo</h3>";

                    // Cadenas de texto que muestra el nombre de la variable, el tipo que es y lo que contiene. Utilizando la funcion echo. El uso de comillas simples imprime el nombre. getType devuelve el tipo.
                    echo "<p>La variable <span class='nombre'>" . '$bRespuesta' . "</span> es de tipo <span class='tipo'>" . gettype($bRespuesta) . "</span> y contiene el valor <span class='valor'>$bRespuesta</span></p>";

                    echo "<p>La variable <span class='nombre'>" . '$iEdad' . "</span> es de tipo <span class='tipo'>" . gettype($iEdad) . "</span> y contiene el valor <span class='valor'>$iEdad</span></p>";

                    echo "<p>La variable <span class='nombre'>" . '$fSueldoHora' . "</span> es de tipo <span class='tipo'>" . gettype($fSueldoHora) . "</span> y contiene el valor <span class='valor'>$fSueldoHora</span></p>";

                    echo "<p>La variable <span class='nombre'>" . '$sNombre' . "</span> es de tipo <span class='tipo'>" . gettype($sNombre) . "</span> y contiene el valor <span class='valor'>$sNombre</span></p>";

                    echo "<p>La variable <span class='nombre'>" . '$vNull' . "</span> es de tipo <span class='tipo'>" . gettype($vNull) . "</span> y contiene el valor <span class='valor'>$vNull</span></p>";

                    echo "<hr>";

                    echo "<h3>Variables con funcion: print</h3>";

                    // Utilizando la funcion print. Al concatenar lo lee como un echo y un unico texto.
                    print "<p>La variable <span class='nombre'>" . '$bRespuesta' . "</span> es de tipo <span class='tipo'>" . gettype($bRespuesta) . "</span> y contiene el valor <span class='valor'>$bRespuesta</span></p>";

                    print "<p>La variable <span class='nombre'>" . '$iEdad' . "</span> es de tipo <span class='tipo'>" . gettype($iEdad) . "</span> y contiene el valor <span class='valor'>$iEdad</span></p>";

                    print "<p>La variable <span class='nombre'>" . '$fSueldoHora' . "</span> es de tipo <span class='tipo'>" . gettype($fSueldoHora) . "</span> y contiene el valor <span class='valor'>$fSueldoHora</span></p>";

                    print "<p>La variable <span class='nombre'>" . '$sNombre' . "</span> es de tipo <span class='tipo'>" . gettype($sNombre) . "</span> y contiene el valor <span class='valor'>$sNombre</span></p>";

                    echo "<hr>";

                    echo "<h3>Variables con funcion: printf</h3>";

                    // Utilizando la funcion printf. Imprime una cadena formateada usando %. %s -> Formatea como cadena de texto (String). %d -> Formatea como número entero (Decimal o integer). %.2f -> Formatea como número decimal (Float) redondeando a 2 decimales.
                    printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%s</span></p>", '$bRespuesta', gettype($bRespuesta), $bRespuesta);

                    printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%d</span></p>", '$iEdad', gettype($iEdad), $iEdad);

                    printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%.2f</span></p>", '$fSueldoHora', gettype($fSueldoHora), $fSueldoHora);

                    printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%s</span></p>", '$sNombre', gettype($sNombre), $sNombre);

                    printf("<hr>");

                    echo "<h3>Variables con funcion: print_r</h3>";

                    // Utilizando la funcion print_r. Muestra la variable y le pones true para que devuelva el valor.
                    echo "<p>La variable <span class='nombre'>" . '$bRespuesta' . "</span> es de tipo <span class='tipo'>" . gettype($bRespuesta) . "</span> y contiene el valor <span class='valor'>" . print_r($bRespuesta, true) . "</span></p>";

                    echo "<p>La variable <span class='nombre'>" . '$iEdad' . "</span> es de tipo <span class='tipo'>" . gettype($iEdad) . "</span> y contiene el valor <span class='valor'>" . print_r($iEdad, true) . "</span></p>";

                    echo "<p>La variable <span class='nombre'>" . '$fSueldoHora' . "</span> es de tipo <span class='tipo'>" . gettype($fSueldoHora) . "</span> y contiene el valor <span class='valor'>" . print_r($fSueldoHora, true) . "</span></p>";

                    echo "<p>La variable <span class='nombre'>" . '$sNombre' . "</span> es de tipo <span class='tipo'>" . gettype($sNombre) . "</span> y contiene el valor <span class='valor'>" . print_r($sNombre, true) . "</span></p>";

                    echo "<hr>";

                    echo "<h3>Variables con funcion: var_dump</h3>";

                    // Utilizando la funcion var_dump. Muestra directamente el tipo de dato, la longitud y lo que tiene dentro.
                    echo "<p>La variable <span class='nombre'>" . '$bRespuesta' . "</span>: ";
                    var_dump($bRespuesta);
                    echo "</p>";

                    echo "<p>La variable <span class='nombre'>" . '$iEdad' . "</span>: ";
                    var_dump($iEdad);
                    echo "</p>";

                    echo "<p>La variable <span class='nombre'>" . '$fSueldoHora' . "</span>: ";
                    var_dump($fSueldoHora);
                    echo "</p>";

                    echo "<p>La variable <span class='nombre'>" . '$sNombre' . "</span>: ";
                    var_dump($sNombre);
                    echo "</p>";

                    echo "<p>La variable <span class='nombre'>" . '$vNull' . "</span>: ";
                    var_dump($vNull);
                    echo "</p>";

                    echo "<hr>";

                    echo "<h3>Otros tipos de variables utilizados en MDCDWESProyectoTema3</h3>";

                    // Ademas de los tipos basicos, en los ejercicios del Tema 3 se usan textos heredoc, arrays y objetos.
                    $bFalso = false;
                    $sHeredoc = <<<TEXTO
                        Texto escrito en varias lineas
                        con la sintaxis heredoc (ejercicio 02)
                    TEXTO;
                    $aDiasSemana = ['domingo', 'lunes', 'martes']; // a de array. Array indexado (ejercicios 03 y 06)
                    $aSueldoDiasSemana = ["LUNES" => 80, "MARTES" => 90]; // Array asociativo (ejercicios 15 y 16)
                    $aTeatro = [[null, "Carlos"], ["Alberto", null]]; // Array bidimensional (ejercicios 17 y 18)
                    $oFechaActual = new DateTime(); // o de objeto. Objeto de la clase DateTime (ejercicios 03, 04 y 06)
                    // Array con el nombre que se quiere mostrar y el valor de cada variable para recorrerlo con foreach
                    $aOtrasVariables = [
                        '$bFalso' => $bFalso,
                        '$sHeredoc' => $sHeredoc,
                        '$aDiasSemana' => $aDiasSemana,
                        '$aSueldoDiasSemana' => $aSueldoDiasSemana,
                        '$aTeatro' => $aTeatro,
                        '$oFechaActual' => $oFechaActual
                    ];

                    foreach ($aOtrasVariables as $sNombreVariable => $valor) {
                        echo "<p>La variable <span class='nombre'>" . $sNombreVariable . "</span> es de tipo <span class='tipo'>" . gettype($valor) . "</span>";

                        // Para los objetos, get_class() dice de que clase son (DateTime)
                        if (is_object($valor)) {
                            echo " de la clase <span class='tipo'>" . get_class($valor) . "</span>";
                        }
                        echo " y contiene:</p>";

                        echo "<pre class='volcado'>";
                        var_dump($valor);
                        echo "</pre>";
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
