<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 17</title>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Dominguez Cruz
         * 07/10/2026
         * 17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
         * asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con
         * distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
         */

        /*
         * Documentacion: https://www.php.net/manual/en/function.array-fill.php
         */
        $oTeatro = array_fill(0, 20, array_fill(0, 15, null));

        $oTeatro[0][4] = "Carlos";
        $oTeatro[3][11] = "Alberto";
        $oTeatro[7][2] = "Raul";
        $oTeatro[14][14] = "Juan";
        $oTeatro[19][0] = "Juanmi";

        echo '<h2>Recorrido con foreach</h2> <br>';

        foreach ($oTeatro as $iNumFila => $fila) {
            foreach ($fila as $iNumAsiento => $oPersona) {
                if ($oPersona !== null) {
                    echo "Fila " . ($iNumFila + 1) . ", Asiento " . ($iNumAsiento + 1) . ": Ocupado por $oPersona\n";
                }
            }
        }
        echo '<br>';

        echo '<h2>Recorrido con while</h2> <br>';

        $iFila = 0;
        while ($iFila < 20) {
            $iAsiento = 0;
            while ($iAsiento < 15) {
                if ($oTeatro[$iFila][$iAsiento] !== null) {
                    echo "Fila " . ($iFila + 1) . ", Asiento " . ($iAsiento + 1) . ": Ocupado por " . $oTeatro[$iFila][$iAsiento] . " <br>";
                }
                $iAsiento++;
            }
            $iFila++;
        }
        echo '<br>';
        ?>
    </body>
</html>
