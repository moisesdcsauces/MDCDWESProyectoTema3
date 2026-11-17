<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 07</title>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Dominguez Cruz
         * 06/10/2026
         * 10. Mostrar el contenido del fichero que se está ejecutando.
         */

        // __FILE__ es la ruta del fichero que se esta ejecutando, basename() deja solo el nombre
        echo "<h2>Viendo el contenido de: " . basename(__FILE__) . "</h2>";

        // Con esta funcion muestra el contenido con colores.
        // highlight_file() ya imprime el codigo por si sola; no lleva echo porque devuelve true y se veria un "1" al final
        highlight_file(__FILE__);
        ?>
    </body>
</html>

