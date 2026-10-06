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
    
        echo "<h2>Viendo el contenido de: " . htmlspecialchars("ejercicio10.php") . "</h2>";
        
        // Con esta funcion muestra el contenido con colores.
        echo highlight_file("ejercicio10.php");
    ?>
</body>
</html>

