<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<body>
    <?php
        /* 
            * Moisés Alberto Dominguez Cruz
            * 06/10/2026
            * 6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
        */
    
        // Declaracion de la variable fecha. Se llama la clase DateTime y no se le pase ningun parametro para que coja la fecha actual.
        $dtFecha = new DateTime();
        
        // Con la funcion modify, le pasamos por parametro los dias que queremos sumarle a la fecha actual.
        $dtFecha->modify('+60 days');
        
        // fecha formateada con el formato (dia-mes-año)
        echo "Fecha formateada con la suma de 60 dias: ".$dtFecha->format('d-m-Y')."\n";
    ?>
</body>
</html>

