<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 24 - Formulario</title>
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
                margin-top: 10vh;
            }

            label{
                font-weight: bold;
                display: block;
                text-align: left;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            form{
                display: inline-block;
                text-align: left;
                background: white;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.05);
                min-width: 320px;
            }

            /* Estilo para cuando se muestran los resultados */
            .resultados {
                display: inline-block;
                text-align: left;
                background: white;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.05);
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
            input[type="date"] {
                margin-bottom: 5px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: 100%;
                box-sizing: border-box;
            }

            input[type="submit"] {
                margin-top: 15px;
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

            .error {
                color: red;
                display: block;
                font-size: 13px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <!--
        -- Moisés Alberto Dominguez Cruz
        -- 15/10/2026
        -- 24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
        -- recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
        -- respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
        -->
        <?php
        echo "<a href='../indexProyectoTema3.php' class='enlace-volver'>⬅ Volver al inicio</a><br>";

        // Importacion de la libreria
        require_once '../core/231018libreriaValidacion.php';

        // Inicializacion de variables
        $entradaOK = true; // Variable que nos indica que todo va bien.
        $aErrores = [
            'nombre' => '',
            'apellidos' => '',
            'fechaNacimiento' => ''
        ]; // Array donde recogemos los mensajes de error.

        $aRespuestas = [
            'nombre' => '',
            'apellidos' => '',
            'fechaNacimiento' => ''
        ]; // Array donde recogeremos las respuestas correctas (si $entradaOK).

        // Para cada campo del formulario: Validar entrada y actuar en consecuencia
        if (isset($_REQUEST['enviar'])) {
            
            // Validación con la librería usando formato YYYY-MM-DD
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 100, 1, 1);
            $aErrores['apellidos'] = validacionFormularios::comprobarAlfabetico($_REQUEST["apellidos"], 150, 1, 1);
            $aErrores['fechaNacimiento'] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"], date("Y-m-d"), "1900-01-01", 1);

            foreach ($aErrores as $valor) {
                if (!empty($valor)) {
                    $entradaOK = false;
                }
            }
        } else {
            $entradaOK = false;
        }

        if ($entradaOK) {
            // Cargar la variable $aRespuestas y tratamiento de datos OK
            $aRespuestas['nombre'] = $_REQUEST["nombre"];
            $aRespuestas['apellidos'] = $_REQUEST["apellidos"];

            // Convertimos la fecha a string formateado (d/m/Y)
            $oFecha = new DateTime($_REQUEST["fechaNacimiento"]);
            $aRespuestas['fechaNacimiento'] = $oFecha->format('d/m/Y');

            echo "<div class='resultados'>";
            echo "<h2>Datos del formulario</h2>";
            
            foreach ($aRespuestas as $campo => $valor) {
                echo "<p>" . ucfirst($campo) . ": <b>" . htmlspecialchars($valor) . "</b></p>";
            }
            
            // Rellenar otro formulario
            echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
            echo "</div>";
        } else {
            ?>    

            <!-- Mostrar formulario -->
            <form name="input" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
                <header>
                    <h2>Formulario de datos</h2>
                </header>

                <!-- Campo Nombre -->
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo !empty($_REQUEST['nombre']) ? htmlspecialchars($_REQUEST['nombre']) : ''; ?>" required/>
                <?php
                if (!empty($aErrores['nombre'])) {
                    echo "<span class='error'>" . $aErrores['nombre'] . "</span>";
                }
                ?>

                <!-- Campo Apellidos -->
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" value="<?php echo !empty($_REQUEST['apellidos']) ? htmlspecialchars($_REQUEST['apellidos']) : ''; ?>" required/>
                <?php
                if (!empty($aErrores['apellidos'])) {
                    echo "<span class='error'>" . $aErrores['apellidos'] . "</span>";
                }
                ?>

                <!-- Campo Fecha de Nacimiento -->
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo !empty($_REQUEST['fechaNacimiento']) ? htmlspecialchars($_REQUEST['fechaNacimiento']) : ''; ?>" required/>
                <?php
                if (!empty($aErrores['fechaNacimiento'])) {
                    echo "<span class='error'>" . $aErrores['fechaNacimiento'] . "</span>";
                }
                ?>

                <p><input type="submit" name="enviar" value="Enviar"/></p>
            </form>

            <?php
        } // Fin si ($entradaOK)
        ?>
    </body>
</html>