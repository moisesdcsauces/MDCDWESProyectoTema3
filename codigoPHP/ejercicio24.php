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

        // Importación de la librería de validación
        require_once '../core/231018libreriaValidacion.php';

        // Inicialización de variables
        $entradaOK = true;
        $aErrores = [
            'nombre' => '',
            'sueldo' => '',
            'fechaNacimiento' => ''
        ];

        $aRespuestas = [
            'nombre' => '',
            'sueldo' => '',
            'fechaNacimiento' => ''
        ];

        if (isset($_REQUEST['enviar'])) {
            
            // Validacion del Nombre
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 100, 1, 1);
            
            // Validacion del sueldo
            $aErrores['sueldo'] = validacionFormularios::comprobarFloatMonetarioES($_REQUEST["sueldo"], PHP_FLOAT_MAX, 0, 1);

            // Validacion de la Fecha de Nacimiento
            $aErrores['fechaNacimiento'] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"], date("Y-m-d"), "1900-01-01", 1);

            // Comprobacion global de errores
            foreach ($aErrores as $valor) {
                if (!empty($valor)) {
                    $entradaOK = false;
                }
            }
        } else {
            $entradaOK = false;
        }

        if ($entradaOK) {
            // Recogida de datos brutos en $aRespuestas
            $aRespuestas['nombre'] = $_REQUEST["nombre"];
            $aRespuestas['sueldo'] = $_REQUEST["sueldo"];
            $aRespuestas['fechaNacimiento'] = $_REQUEST["fechaNacimiento"];

            echo "<div class='resultados'>";
            echo "<h2>Datos del formulario</h2>";
            
            echo "<p>Nombre: <b>" . htmlspecialchars($aRespuestas['nombre']) . "</b></p>";
            // Formateo directo del sueldo a float con punto y luego a formato monetario español (internamente php necesita reconocer el punto para que entienda que es un float)
            echo "<p>Sueldo: <b>" . htmlspecialchars(number_format(floatval(str_replace(',', '.', $aRespuestas['sueldo'])), 2, ',', '.') . " €") . "</b></p>";
            // Formateo directo de la fecha a d/m/Y
            echo "<p>Fecha de Nacimiento: <b>" . htmlspecialchars((new DateTime($aRespuestas['fechaNacimiento']))->format('d/m/Y')) . "</b></p>";
            
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
                <input type="text" id="nombre" name="nombre" value="<?php echo (!empty($_REQUEST['nombre']) && empty($aErrores['nombre'])) ? htmlspecialchars($_REQUEST['nombre']) : ''; ?>" required/>
                <?php
                if (!empty($aErrores['nombre'])) {
                    echo "<span class='error'>" . $aErrores['nombre'] . "</span>";
                }
                ?>

                <!-- Campo Sueldo -->
                <label for="sueldo">Sueldo:</label>
                <input type="text" id="sueldo" name="sueldo" value="<?php echo (!empty($_REQUEST['sueldo']) && empty($aErrores['sueldo'])) ? htmlspecialchars($_REQUEST['sueldo']) : ''; ?>" required/>
                <?php
                if (!empty($aErrores['sueldo'])) {
                    echo "<span class='error'>" . $aErrores['sueldo'] . "</span>";
                }
                ?>

                <!-- Campo Fecha de Nacimiento -->
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo (!empty($_REQUEST['fechaNacimiento']) && empty($aErrores['fechaNacimiento'])) ? htmlspecialchars($_REQUEST['fechaNacimiento']) : ''; ?>" required/>
                <?php
                if (!empty($aErrores['fechaNacimiento'])) {
                    echo "<span class='error'>" . $aErrores['fechaNacimiento'] . "</span>";
                }
                ?>

                <p><input type="submit" name="enviar" value="Enviar"/></p>
            </form>

            <?php
        }
        ?>
    </body>
</html>