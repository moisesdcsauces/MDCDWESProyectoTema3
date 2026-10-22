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

            #nombre, #sueldo, #fechaNacimiento {
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

            // Valida el campo nombre: alfabetico, máx 100 caracteres, mín 1, obligatorio (1)
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 100, 1, 1);

            // Valida el sueldo con el método específico que exige coma decimal y rango entre 0 y el flotante máximo
            $aErrores['sueldo'] = validacionFormularios::comprobarFloatMonetarioES($_REQUEST["sueldo"], PHP_FLOAT_MAX, 0, 1);

            // Valida la fecha de nacimiento entre el año 1900 y la fecha actual (date("Y-m-d"))
            $aErrores['fechaNacimiento'] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"], date("Y-m-d"), "1900-01-01", 1);

            // Comprobación global de errores
            foreach ($aErrores as $valor) {
                if (!empty($valor)) {
                    $entradaOK = false; // Cambiamos el estado a falso para recargar el formulario
                }
            }
        } else {
            $entradaOK = false; // Si el formulario no se ha enviado (primera carga), la entrada no es correcta
        }

        if ($entradaOK) {
            // Recogida de datos en $aRespuestas
            $aRespuestas['nombre'] = $_REQUEST["nombre"];
            // Guardamos el sueldo tal como se introdujo (con coma)
            $aRespuestas['sueldo'] = floatval(str_replace(',', '.', $_REQUEST["sueldo"]));
            // Instanciamos el objeto DateTime a partir del valor recibido en el input tipo date
            $aRespuestas['fechaNacimiento'] = new DateTime($_REQUEST["fechaNacimiento"]);

            echo "<div class='resultados'>";
            echo "<h2>Datos del formulario</h2>";

            echo "<p>Nombre: <b>" . $aRespuestas['nombre'] . "</b></p>";
            // Formatea el número a formato monetario español (2 decimales, coma decimal, punto de miles) y añade el símbolo €
            echo "<p>Sueldo: <b>" . number_format($aRespuestas["sueldo"], 2, ',', '.') . "</b></p>";
            // Aplica el metodo ->format('d/m/Y') sobre el objeto DateTime previamente almacenado en $aRespuestas
            echo "<p>Fecha de Nacimiento: <b>" . $aRespuestas['fechaNacimiento']->format('d/m/Y') . "</b></p>";

            echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
            echo "</div>";
        } else {
            ?>    

            <form name="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>
                <header>
                    <h2>Formulario de datos</h2>
                </header>

                <!-- Campo Nombre -->
                <label for="nombre" >Nombre:</label>

                <input type="text" name="nombre" id="nombre" value="<?php echo!empty($_REQUEST["nombre"]) ? htmlspecialchars($_REQUEST["nombre"]) : '' ?>"/>

                <?php echo!empty($aErrores["nombre"]) ? "<span style='color:red;'>" . $aErrores['nombre'] . "</span>" : '' ?>

                <br/>
                <!-- Campo Sueldo -->
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>

                <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo!empty($_REQUEST["fechaNacimiento"]) && empty($aErrores["fechaNacimiento"]) ? htmlspecialchars($_REQUEST["fechaNacimiento"]) : '' ?>"/>

                <?php echo!empty($aErrores["fechaNacimiento"]) ? "<span style='color:red;'>" . $aErrores['fechaNacimiento'] . "</span>" : '' ?>
                <br/>
                <!-- Campo Fecha de Nacimiento -->
                <label for="sueldo" >Sueldo:</label>

                <input type="text" name="sueldo" id="sueldo" title="Usar comas para separar decimales" value="<?php echo!empty($_REQUEST["sueldo"]) ? htmlspecialchars($_REQUEST["sueldo"]) : '' ?>"/>

                <?php echo!empty($aErrores["sueldo"]) ? "<span style='color:red;'>" . $aErrores['sueldo'] . "</span>" : '' ?>

                <br/>

                <p><input type="submit" name="enviar" value="Enviar"/></p>
            </form>

            <?php
        }
        ?>
    </body>
</html>