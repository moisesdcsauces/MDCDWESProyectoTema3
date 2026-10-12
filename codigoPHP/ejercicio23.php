<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 23 - Formulario</title>
        <style>
            .enlace-volver{
                position: absolute;
                top: 20px;
                left: 20px;
                color: #474a8a;
                font-weight: bold;
                padding: 10px 15px;
                text-decoration: none;
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

            input[type="text"] {
                margin-bottom: 10px;
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
        </style>
    </head>
    <body>
        <!--
        -- Moisés Alberto Dominguez Cruz
        -- 12/10/2026
        -- 23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
        -- recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
        -->
        <?php
        echo "<a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a><br>";

        // Si nombre y el apellido no están vacíos entra en el if.
        if (!empty($_POST['nombre']) && !empty($_POST['apellidos'])) {
            echo "<div class='resultados'>";
            echo "<h2>Resultados del Cuestionario</h2>";

            // Variables y el valor asignado que recoge.
            $sNombre = $_REQUEST['nombre'];
            $sApellidos = $_REQUEST['apellidos'];

            // Muestro el contenido de la variable nombre con print_r (usando la variable correcta $sNombre)
            print_r('El nombre es: ' . $sNombre);
            echo '<br>';
            // Muestro el contenido de la variable apellidos con print_r (usando la variable correcta $sApellidos)
            print_r('Los apellidos son: ' . $sApellidos);
            echo '<br>';
            echo '<br>';

            // Contenido con print_r de las variables $_REQUEST
            echo '<p>El contenido de $_REQUEST es:</p>';
            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';

            // Contenido con print_r de las variables $_GET
            echo '<p>El contenido de $_GET es:</p>';
            echo '<pre>';
            print_r($_GET);
            echo '</pre>';

            // Contenido con print_r de las variables $_POST
            echo '<p>El contenido de $_POST es:</p>';
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';

            echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
            echo "</div>";
        } else {
            // Los datos se guardan en el mismo archivo y se muestran en la misma página.
            // Se pide el nombre y apellidos que son de tipo text.
            ?>    
            <form name="input" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <header>
                    <h2>Formulario de datos</h2>
                </header>
                <?php
                // Mantenemos lo que el usuario escribió por si falla el otro campo (value)
                $valorNombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
                echo 'Nombre: <input type="text" name="nombre" value="' . $valorNombre . '"/>';
                if (isset($_POST['enviar']) && empty($_POST['nombre'])) {
                    echo "<span style='color:red; display:block; font-size:13px;'>¡Falta introducir el nombre!</span>";
                }
                echo '<br>';
                ?>
                <?php
                $valorApellidos = isset($_POST['apellidos']) ? htmlspecialchars($_POST['apellidos']) : '';
                echo 'Apellidos: <input type="text" name="apellidos" value="' . $valorApellidos . '"/>';
                if (isset($_POST['enviar']) && empty($_POST['apellidos'])) {
                    echo "<span style='color:red; display:block; font-size:13px;'>¡Falta introducir los apellidos!</span>";
                }
                ?>
                <p><input type="submit" value="Enviar" name="enviar"/></p>
            </form>
            <?php
        }
        ?>
    </body>
</html>
