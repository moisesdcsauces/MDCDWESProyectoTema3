<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 22 - Formulario</title>
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
                margin-top: 15vh;
            }

            label{
                font-weight: bold;
            }

            form{
                display: inline-block;
                text-align: left;
                background: white;
                padding: 30px;
                border-radius: 8px;
            }

            /* Estilo para cuando se muestran los resultados */
            .resultados {
                display: inline-block;
                text-align: left;
                background: white;
                padding: 30px;
                border-radius: 8px;
                max-width: 600px;
                width: 100%;
            }

            pre {
                background: #f0f0f0;
                padding: 10px;
                border-radius: 5px;
                text-align: left;
            }

            input[type="text"],
            input[type="date"],
            input[type="number"] {
                margin-bottom: 20px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: 100%;
                box-sizing: border-box;
            }

            input[type="submit"] {
                margin-top: 10px;
                font-weight: bold;
                padding: 10px;
                width: 100%;
                background-color: #777bb4;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #5c6096;
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
            input:disabled {
                background-color: #e0e0e0;
            }
        </style>
    </head>
    <body>
        <!--
        -- Moisés Alberto Dominguez Cruz
        -- 12/10/2026
        -- 22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.
        -->
        <?php
        echo "<a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a><br>";

        // IF para pedir los datos 
        if (isset($_REQUEST['submit'])) {
            // Variables y el valor asignado que recoge.
            $sNombre = $_REQUEST['nombre'];
            print_r('El nombre es: ' . $sNombre);
            echo '<br>';

            $sApellidos = $_REQUEST['apellidos'];
            print_r('Los apellidos son: ' . $sApellidos);
            echo '<br>';

            // Contenido con print_r de las variables $_REQUEST
            echo '<p>Contenido de $_RESQUEST: </p>';
            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';

            // Contenido con print_r de las variables $_GET
            echo '<p>El contenido de $_GET: </p>';
            echo '<pre>';
            print_r($_GET);
            echo '</pre>';

            // Contenido con print_r de las variables $_POST
            echo '<p>El contenido de $_POST: </p>';
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            
            echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
        }else{
            // Los datos se guardan en el mismo archivo y se muestran en la misma pagina.
            // Se pide el nombre y apellidos que son de tipo text.
        ?>
        <header>
            <h2>Formulario de datos</h2>
        </header>
        <form name="input" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nombre" >Nombre: </label>
            <input type="text" name="nombre" id="nombre"/>
            <br/>

            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos"/>
            <br/>

            <input type="submit" name="submit" id="submit" value="Enviar"/>
        </form>
        <?php
        }
        ?>
    </body>
</html>

