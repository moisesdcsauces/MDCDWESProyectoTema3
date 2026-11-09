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
            * 7. Ejercicio mostrar el nombre del fichero que se está ejecutando
        */
    
        // En el punto 1.4 del pdf, existe una variable especial de php llamada $_SERVER['PHP_SELF'] que muestra la ruta del archivo en ejecucion. 
        // La funcion basename() muestra unicamente el nombre del archivo, si le pasamos el parametro de la variable especial, nos devolvera solamente el nombre.
        $sNombreFichero = basename($_SERVER['PHP_SELF']);
        
        echo "Fichero en ejecucion: ".$sNombreFichero. "\n";
        
    ?>
</body>
</html>