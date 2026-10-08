<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 21 - Formulario</title>
        <style>
            .enlace-volver{
                position: absolute;
                top: 20px;
                left: 20px;
                color: #474a8a;     
                font-weight: bold;
                padding: 10px 15px;
                border-radius: 1px;
            }
            
            h2{
                color: #777bb4;
                text-align: center;
            }
            
            body{
                text-align: center;
                background-color: #f4f5f7;
            }
            
            label{
                font-weight: bold; 
            }

            form{
                display: inline-block;
                text-align: left;
            }

            input[type="text"],
            input[type="date"],
            input[type="number"] {
                margin-bottom: 20px;
            }
            
            input[type="submit"] {
                margin-top: 10px;
                font-weight: bold;
            }

            /* Fondo amarillo para campos obligatorios */
            input:required {
                background-color: #fff9c4;
            }

            /* Fondo blanco para campos opcionales */
            input:optional {
                background-color: #ffffff;
            }

            /* Fondo gris para campos bloqueados */
            input:disabled{
                background-color: #e0e0e0;
            }
        </style>
    </head>
    <body>
        <!--
        -- Moisés Alberto Dominguez Cruz
        -- 08/10/2026
        -- 21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
        -- las preguntas y las respuestas recogidas. 
        -->
        <?php
        echo "<a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a><br>";
        ?>
        <header>
            <h2>Formulario de datos</h2>
        </header>
        <form name="formularioDatos" action="Tratamiento.php" method="post">

            <label for="nombre" >Nombre:</label>
            <input type="text" name="nombre" id="nombre" required/>
            <br/>

            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" required/>
            <br/>

            <label for="sueldo">Sueldo:</label>
            <input type="number" name="sueldo" id="sueldo" step="any" optional/>
            <br/>
            
            <label for="codigo_empleado">Codigo Empleado:</label>
            <input type="text" name="codigo_empleado" id="codigo_empleado" value="EMP-67" disabled>
            <br>

            <input type="submit" name="submit" id="submit" value="Enviar"/>
        </form>
    </body>
</html>

