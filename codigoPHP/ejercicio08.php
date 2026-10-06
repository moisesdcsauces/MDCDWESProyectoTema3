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
            * 8. Mostrar la dirección IP del equipo desde el que estás accediendo.
        */
    
        // La variable especial $_SERVER['REMOTE_ADDR'] almacena la ip del equipo a la que se accede.
        $sIp = $_SERVER['REMOTE_ADDR'];
        
        echo '<h2>La direccion de tu equipo es: </h2>'.$sIp;  
    ?>
</body>
</html>
