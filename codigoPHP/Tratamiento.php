<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tratamiento</title>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Dominguez Cruz
         * 08/10/2026
         * 21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
         * las preguntas y las respuestas recogidas.
         */
        echo "<a href='ejercicio21.php'>⬅ Volver al formulario</a><br>";

        // Recoge los valores de los campos por el metodo post del formulario
        $sNombre = $_REQUEST['nombre'];
        $dFecha = $_REQUEST['fechaNacimiento'];
        $iSueldo = $_REQUEST['sueldo'];

        printf("Nombre: " . $sNombre . "\n"); //Muestra por pantalla el texto seguido del valor y un salto de linea

        echo "<br>";

        printf("Fecha nacimiento: " . $dFecha . "\n"); //Muestra por pantalla el texto seguido del valor y un salto de linea

        echo "<br>";

        printf("Sueldo: " . $iSueldo . "\n"); //Muestra por pantalla el texto seguido del valor
        ?>
    </body>
</html>

