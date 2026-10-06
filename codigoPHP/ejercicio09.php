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
            * 9. Mostrar el path donde se encuentra el fichero que se está ejecutando.
        */
    
        // Aqui con la variable $_SERVER['PHP_SELF'] nos valdria para ver el path donde se encuentra el fichero.
        $sPath = $_SERVER['PHP_SELF'];
        
        echo '<h2>Path del fichero que se esta ejecutando: </h2>'.$sPath;  
    ?>
</body>
</html>