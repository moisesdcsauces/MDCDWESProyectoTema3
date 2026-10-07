<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 18</title>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Dominguez Cruz
         * 07/10/2026
         * 18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
         */

        /*
         * Documentacion: https://www.php.net/manual/en/function.array-walk.php
         */
        $oTeatro = array_fill(0, 20, array_fill(0, 15, null));

        $oTeatro[0][4] = "Carlos";
        $oTeatro[3][11] = "Alberto";
        $oTeatro[7][2] = "Raul";
        $oTeatro[14][14] = "Juan";
        $oTeatro[19][0] = "Juanmi";

        echo '<h2>Recorrido con la funcion array_walk</h2> <br>';

        // Recorremos primero las filas y luego los asientos de esas filas
        array_walk($oTeatro, function ($fila, $iNumFila) {
            array_walk($fila, function ($oPersona, $iNumAsiento) use ($iNumFila) {

                // Si el asiento tiene el nombre de una persona, lo mostramos
                if ($oPersona !== null) {
                    echo "Fila " . ($iNumFila + 1) . ", Asiento " . ($iNumAsiento + 1) . ": Ocupado por $oPersona <br>";
                }
            });
        });
        ?>
    </body>
</html>
