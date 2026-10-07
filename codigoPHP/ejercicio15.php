<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Dominguez Cruz
         * 07/10/2026
         * 15. Crear e inicializar un array con el sueldo percibido de lunes a domingo
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

        echo "<h3>Sueldos por dias</h3><ul>";

        $fTotal = 0;
        
        foreach ($aSueldoDiasSemana as $sDia => $fPago) {
            echo "<li>el $sDia se cobra $fPago </li>";
            $fTotal+=$fPago;
        }
        
        echo "</ul><p>Pago total de la semana $fTotal";
        ?>
    </body>
</html>
