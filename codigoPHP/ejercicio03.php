<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
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
        //Mostrar el dia, mes anyo y hora actual
        echo '<p>Hoy es '.$dFechaActual->format("d").' de '.$dFechaActual->format("M").' de '.$dFechaActual->format("Y").' y son las '.$dFechaActual->format("H:i").' horas</p>';
        //Mostrar la fecha con /
        echo "La fecha de hoy es ".$dFechaActual->format("d/m/Y");
        echo '</br>';
        //Mostrar la fecha con -
        echo "La fecha de hoy es ".$dFechaActual->format("d-m-Y");
        echo '</br>';
        //Mostrar el anyo
        echo "El año actual es ".$dFechaActual->format("Y");
        echo '</br>';
        //Mostrar el dia de la semana
        echo "El dia de la semana es ".$dFechaActual->format("l");
        echo '</br>';
        //Mostrar la hora
        echo "La hora actual es ".$dFechaActual->format("H:i");
        echo '</br>';
        //Mostrar la marca de tiempo actual
        echo "La marca de tiempo actual es ".$dFechaActual->getTimestamp();
        echo '</br>';
        //Inicializar la variable $oFechaCumpleanos
        $dFechaCumpleanos = new DateTime('1999-06-09');
        //Mostrar la fecha de cumpleaños con /
        echo '</br>';
        echo "La fecha de nacimiento es ".$dFechaCumpleanos->format("d/m/Y");
        echo '</br>';
        //Mostrar la fecha con -
        echo "La fecha de nacimiento es ".$dFechaCumpleanos->format("d-m-Y");
        echo '</br>';
        //Mostrar el año
        echo "El año de nacimiento es ".$dFechaCumpleanos->format("Y");
        echo '</br>';
        //Mostrar el dia de la semana de nacimiento
        echo "El dia de la semana de nacimiento es ".$dFechaCumpleanos->format("l");
        echo '</br>';
        
        // Ponerlo con los colores del 2
    ?>
</body>
</html>