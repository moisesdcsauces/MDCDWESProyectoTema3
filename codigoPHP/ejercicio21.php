<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 21 - Formulario</title>
    </head>
    <body>
        <!--
        Moisés Alberto Dominguez Cruz
        08/10/2026
        21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
        las preguntas y las respuestas recogidas.  
        -->
         
        
         <form name="input" action="Tratamiento.php" method="post">
             Nombre:<input type="text" name="nombre"/><br>
             Edad:<input type="number" name="edad"/><br>
             <input type="submit" value="Enviar" />
         </form>
        
        // Cambiar edad por fecha de nacimiento
    </body>
</html>

