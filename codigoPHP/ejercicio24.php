<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 24 - Formulario Completo</title>
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
                margin-top: 5vh;
                margin-bottom: 5vh;
                font-family: Arial, sans-serif;
            }

            label{
                font-weight: bold;
                display: block;
                text-align: left;
                margin-top: 12px;
                margin-bottom: 5px;
            }

            form{
                display: inline-block;
                text-align: left;
                background: white;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.05);
                min-width: 360px;
                max-width: 450px;
                width: 100%;
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
            input[type="date"],
            select {
                margin-bottom: 0px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: 100%;
                box-sizing: border-box;
            }

            input[readonly] {
                background-color: #e9ecef !important;
                color: #6c757d;
                cursor: not-allowed;
                border: 1px solid #ced4da;
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

            #nombre, #sueldo, #fechaNacimiento, #telefono, #estadoCivil {
                background-color: #fff9c4;
            }

            .grupo-opciones {
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .label-inline {
                display: inline;
                font-weight: normal;
                margin-right: 15px;
                margin-left: 3px;
            }

            .error {
                color: red;
                display: block;
                font-size: 13px;
                min-height: 16px;
                margin-top: 3px;
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <!--
        -- Moisés Alberto Dominguez Cruz
        -- 15/10/2026
        -- Ejercicio 24: Formulario completo con campos de texto, numéricos, fechas, radios, desplegables, checkboxes y campos bloqueados.
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
            'fechaNacimiento' => '',
            'genero' => '',
            'telefono' => '',
            'estadoCivil' => '',
            'aceptaTerminos' => ''
        ];

        $aRespuestas = [
            'nombre' => '',
            'sueldo' => '',
            'fechaNacimiento' => '',
            'genero' => '',
            'telefono' => '',
            'estadoCivil' => '',
            'aceptaTerminos' => ''
        ];
        
        $aEstadoCivilOpciones = ['Soltero/a', 'Casado/a', 'Divorciado/a', 'Viudo/a'];

        if (isset($_REQUEST['enviar'])) {

            // Valida el campo Nombre. Uso del metodo estatico comprobarAlfabetico
            $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 100, 1, 1);

            // Valida el campo Sueldo. Uso del metodo estatico comprobarFloatMonetarioES
            $aErrores['sueldo'] = validacionFormularios::comprobarFloatMonetarioES($_REQUEST["sueldo"], PHP_FLOAT_MAX, 0, 1);

            // Valida la Fecha de Nacimiento. Uso del metodo estatico ValidarFecha.
            $aErrores['fechaNacimiento'] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"], date("Y-m-d"), "1900-01-01", 1);

            // Valida los Radio Buttons de genero
            if (empty($_REQUEST['genero'])) {
                $aErrores['genero'] = "Debe seleccionar una opcion de genero.";
            }
            
            // Valida el telefono. Uso del metodo estatico validarTelefono
            $aErrores['telefono'] = validacionFormularios::validarTelefono($_REQUEST["telefono"], 1);

            // Valida el Desplegable de Estado Civil. Uso del metodo estatico ValidarElementoEnLista
            $sEstadoCivilSeleccionado = isset($_REQUEST['estadoCivil']) ? $_REQUEST['estadoCivil'] : '';
            $aErrores['estadoCivil'] = validacionFormularios::validarElementoEnLista($sEstadoCivilSeleccionado, $aEstadoCivilOpciones);

            // Valida la Casilla de Verificacion de terminos
            if (empty($_REQUEST['aceptaTerminos'])) {
                $aErrores['aceptaTerminos'] = "Es obligatorio aceptar los terminos y condiciones.";
            }

            // Comprobación global de errores
            foreach ($aErrores as $valor) {
                if (!empty($valor)) {
                    $entradaOK = false;
                }
            }
        } else {
            $entradaOK = false;
        }

        if ($entradaOK) {
            // Recogida de datos procesados en $aRespuestas
            $aRespuestas['nombre'] = $_REQUEST["nombre"];
            $aRespuestas['sueldo'] = floatval(str_replace(',', '.', $_REQUEST["sueldo"]));
            $aRespuestas['fechaNacimiento'] = new DateTime($_REQUEST["fechaNacimiento"]);
            $aRespuestas['telefono'] = $_REQUEST["telefono"];
            $aRespuestas['genero'] = $_REQUEST["genero"];
            $aRespuestas['estadoCivil'] = $_REQUEST["estadoCivil"];
            $aRespuestas['aceptaTerminos'] = $_REQUEST["aceptaTerminos"];

            // la salida del genero
            $aGenerosFormateados = [
                'M' => 'Masculino',
                'F' => 'Femenino',
                'O' => 'Otro'
            ];

            echo "<div class='resultados'>";
            echo "<h2>Datos del formulario</h2>";

            echo "<p>Fecha y Hora de registro: <b>" . date('d/m/Y H:i:s') . "</b></p>";
            echo "<p>Nombre: <b>" . $aRespuestas['nombre'] . "</b></p>";
            echo "<p>Sueldo: <b>" . number_format($aRespuestas["sueldo"], 2, ',', '.') . " €</b></p>";
            echo "<p>Fecha de Nacimiento: <b>" . $aRespuestas['fechaNacimiento']->format('d/m/Y') . "</b></p>";
            echo "<p>Telefono: <b>" . $aRespuestas['telefono'] . "</b></p>";
            echo "<p>Genero: <b>" . $aGenerosFormateados[$aRespuestas['genero']] . "</b></p>";
            echo "<p>Estado Civil: <b>" . $aRespuestas['estadoCivil'] . "</b></p>";
            echo "<p>Terminos y condiciones: <b>Aceptados</b></p>";

            echo "<br><a href='" . $_SERVER['PHP_SELF'] . "'>⬅ Rellenar otro formulario</a>";
            echo "</div>";
        } else {
            ?>    

            <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
                <header>
                    <h2>Formulario de datos</h2>
                </header>

                <!-- Campo Bloqueado (Fecha y Hora) -->
                <label for="fechaRegistro">Fecha y Hora de registro:</label>
                <input type="text" name="fechaRegistro" id="fechaRegistro" value="<?php echo date('d/m/Y H:i:s'); ?>" readonly/>
                <span class='error'></span>

                <!-- Campo Nombre -->
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo !empty($_REQUEST["nombre"]) && empty($aErrores["nombre"]) ? $_REQUEST["nombre"] : ''; ?>"/>
                <span class='error'><?php echo $aErrores['nombre']; ?></span>

                <!-- Campo Sueldo -->
                <label for="sueldo">Sueldo:</label>
                <input type="text" name="sueldo" id="sueldo" title="Usar comas para separar decimales" value="<?php echo !empty($_REQUEST["sueldo"]) && empty($aErrores["sueldo"]) ? $_REQUEST["sueldo"] : ''; ?>"/>
                <span class='error'><?php echo $aErrores['sueldo']; ?></span>

                <!-- Campo Fecha de Nacimiento -->
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo !empty($_REQUEST["fechaNacimiento"]) && empty($aErrores["fechaNacimiento"]) ? $_REQUEST["fechaNacimiento"] : ''; ?>"/>
                <span class='error'><?php echo $aErrores['fechaNacimiento']; ?></span>

                <!-- Campo Telefono -->
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" value="<?php echo !empty($_REQUEST["telefono"]) && empty($aErrores["telefono"]) ? $_REQUEST["telefono"] : ''; ?>"/>
                <span class='error'><?php echo $aErrores['telefono']; ?></span>
                
                <!-- Campo Radio buttons Genero -->
                <label>Género:</label>
                <div class="grupo-opciones">
                    <input type="radio" name="genero" id="generoM" value="M" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'M') ? 'checked' : ''; ?>/>
                    <label for="generoM" class="label-inline">Masculino</label>

                    <input type="radio" name="genero" id="generoF" value="F" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'F') ? 'checked' : ''; ?>/>
                    <label for="generoF" class="label-inline">Femenino</label>

                    <input type="radio" name="genero" id="generoO" value="O" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'O') ? 'checked' : ''; ?>/>
                    <label for="generoO" class="label-inline">Otro</label>
                </div>
                <span class='error'><?php echo $aErrores['genero']; ?></span>

                <!-- Campo Desplegable / Select (Estado Civil) -->
                <label for="estadoCivil">Estado Civil:</label>
                <select name="estadoCivil" id="estadoCivil">
                    <option value="">-- Seleccione una opcion --</option>
                    <option value="Soltero/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Soltero/a') ? 'selected' : ''; ?>>Soltero/a</option>
                    <option value="Casado/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Casado/a') ? 'selected' : ''; ?>>Casado/a</option>
                    <option value="Divorciado/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Divorciado/a') ? 'selected' : ''; ?>>Divorciado/a</option>
                    <option value="Viudo/a" <?php echo (isset($_REQUEST['estadoCivil']) && $_REQUEST['estadoCivil'] == 'Viudo/a') ? 'selected' : ''; ?>>Viudo/a</option>
                </select>
                <span class='error'><?php echo $aErrores['estadoCivil']; ?></span>

                <!-- Campo Casilla de Verificacion / Checkbox (Aceptar Terminos) -->
                <div class="grupo-opciones" style="margin-top: 15px;">
                    <input type="checkbox" name="aceptaTerminos" id="aceptaTerminos" value="SI" <?php echo isset($_REQUEST['aceptaTerminos']) ? 'checked' : ''; ?>/>
                    <label for="aceptaTerminos" class="label-inline">Acepto los términos y condiciones</label>
                </div>
                <span class='error'><?php echo $aErrores['aceptaTerminos']; ?></span>

                <p><input type="submit" name="enviar" value="Enviar"/></p>
            </form>

            <?php
        }
        ?>
    </body>
</html>