<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 12</title>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Dominguez Cruz
         * 07/10/2026
         * 12. Ejercicio mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())
         */

        echo "<h2>Variable superglobal _SERVER formateada con print_r</h2><br>";

        print_r($_SERVER);

        echo "<br>";

        echo "<h2>Recorrido con un foreach()</h2><br>";
        
        foreach ($_SERVER as $key => $value) {
            echo "<li>la variable $key contiene $value </li>";
        }
        echo "</ul>";
        
        ?>
    </body>
</html>

