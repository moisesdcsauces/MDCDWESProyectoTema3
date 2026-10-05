<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <?php
        /* 
            * Moisés Alberto Dominguez Cruz
            * 05/10/2026
            * 2. Inicializar y mostrar una variable heredoc.
        */
        //Si queremos mostrar por pantalla un texto con el formato de este tipo, usamos la variable heredoc,
        // la inicializamos, le ponemos el contenido, la cerramos con su nombre y cuando este terminada la imprimimos con print.
        $a=<<<CadenaHeredoc
        Desarrollo web entorno servidor</br>
        Esta es una variable heredoc
        CadenaHeredoc;
        print $a;
    ?>
</body>
</html>
