<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Dominguez Cruz
         * 07/10/2026
         * 16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
         */

        $aSueldoDiasSemana = [
            "LUNES" => 80,
            "MARTES" => 90,
            "MIERCOLES" => 56,
            "JUEVES" => 70,
            "VIERNES" => 10,
            "SABADO" => 67,
            "DOMINGO" => 100
        ];

        reset($aSueldoDiasSemana);
        
        while(key($aSueldoDiasSemana)!=null){
            echo 'El dia de la semana '.key($aSueldoDiasSemana).'</br>';
            
            echo 'El sueldo de ese dia es '.current($aSueldoDiasSemana).'</br>';
            
            next($aSueldoDiasSemana);
        }
        ?>
    </body>
</html>

