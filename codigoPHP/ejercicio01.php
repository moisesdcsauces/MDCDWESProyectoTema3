<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <style>
            .nombre{
                color: red;
                font-weight: bold;
            }
            .tipo{
                color: green;
                font-weight: bold;
            }
            .valor{
                color: blue;
                font-weight: bold;
            }
            h3{
                color: #474a8a;
            }
        </style>
    </head>
    <body>
        <?php
        /*
         * Moisés Alberto Domínguez Cruz
         * 30/09/2026
         * 1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).
        */
          
// Variables de cada tipo con una asignacion. Toca acostumbrarse a poner el tipo de dato en minuscula y el nombre de la variable (y que tenga sentido).
        $bRespuesta = true; //b de boolean.
        $iEdad = 27; //i de Integer.
        $fSueldoHora = 15.50; //f de Float.
        $sNombre = 'Moisés'; //s de String.

        echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a>";

        echo "<h3>Variables con funcion: echo</h3>";

// Cadenas de texto que muestra el nombre de la variable, el tipo que es y lo que contiene. Utilizando la funcion echo. El uso de comillas simples imprime el nombre. getType devuelve el tipo.
        echo "<p>La variable <span class='nombre'>".'$bRespuesta'."</span> es de tipo <span class='tipo'>".gettype($bRespuesta)."</span> y contiene el valor <span class='valor'>$bRespuesta</span></p>";

        echo "<p>La variable <span class='nombre'>".'$iEdad'."</span> es de tipo <span class='tipo'>".gettype($iEdad)."</span> y contiene el valor <span class='valor'>$iEdad</span></p>";

        echo "<p>La variable <span class='nombre'>".'$fSueldoHora'."</span> es de tipo <span class='tipo'>".gettype($fSueldoHora)."</span> y contiene el valor <span class='valor'>$fSueldoHora</span></p>";

        echo "<p>La variable <span class='nombre'>".'$sNombre'."</span> es de tipo <span class='tipo'>".gettype($sNombre)."</span> y contiene el valor <span class='valor'>$sNombre</span></p>";

        echo "<hr>";

        echo "<h3>Variables con funcion: print</h3>";

// Utilizando la funcion print. Al concatenar lo lee como un echo y un unico texto.
        print "<p>La variable <span class='nombre'>" . '$bRespuesta' . "</span> es de tipo <span class='tipo'>".gettype($bRespuesta)."</span> y contiene el valor <span class='valor'>$bRespuesta</span></p>";

        print "<p>La variable <span class='nombre'>" . '$iEdad' . "</span> es de tipo <span class='tipo'>".gettype($iEdad)."</span> y contiene el valor <span class='valor'>$iEdad</span></p>";

        print "<p>La variable <span class='nombre'>" . '$fSueldoHora' . "</span> es de tipo <span class='tipo'>".gettype($fSueldoHora)."</span> y contiene el valor <span class='valor'>$fSueldoHora</span></p>";

        print "<p>La variable <span class='nombre'>" . '$sNombre' . "</span> es de tipo <span class='tipo'>".gettype($sNombre)."</span> y contiene el valor <span class='valor'>$sNombre</span></p>";

        echo "<hr>";

        echo "<h3>Variables con funcion: printf</h3>";

// Utilizando la funcion printf. Imprime una cadena formateada usando %. %s -> Formatea como cadena de texto (String). %d -> Formatea como número entero (Decimal o integer). %.2f -> Formatea como número decimal (Float) redondeando a 2 decimales.
        printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%s</span></p>",'$bRespuesta',gettype($bRespuesta), $bRespuesta);

        printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%d</span></p>",'$iEdad',gettype($iEdad), $iEdad);

        printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%.2f</span></p>",'$fSueldoHora',gettype($fSueldoHora), $fSueldoHora);

        printf("<p>La variable <span class='nombre'>%s</span> es de tipo <span class='tipo'>%s</span> y contiene el valor <span class='valor'>%s</span></p>",'$sNombre',gettype($sNombre), $sNombre);

        printf("<hr>");

        echo "<h3>Variables con funcion: print_r</h3>";

// Utilizando la funcion print_r. Muestra la variable y le pones true para que devuelva el valor.
        echo "<p>La variable <span class='nombre'>".'$bRespuesta'."</span> es de tipo <span class='tipo'>".gettype($bRespuesta)."</span> y contiene el valor <span class='valor'>".print_r($bRespuesta, true)."</span></p>";

        echo "<p>La variable <span class='nombre'>".'$iEdad'."</span> es de tipo <span class='tipo'>".gettype($iEdad)."</span> y contiene el valor <span class='valor'>".print_r($iEdad, true)."</span></p>";

        echo "<p>La variable <span class='nombre'>".'$fSueldoHora'."</span> es de tipo <span class='tipo'>".gettype($fSueldoHora)."</span> y contiene el valor <span class='valor'>".print_r($fSueldoHora, true)."</span></p>";

        echo "<p>La variable <span class='nombre'>".'$sNombre'."</span> es de tipo <span class='tipo'>".gettype($sNombre)."</span> y contiene el valor <span class='valor'>".print_r($sNombre, true)."</span></p>";

        echo "<hr>";

        echo "<h3>Variables con funcion: var_dump</h3>";

// Utilizando la funcion var_dump. Muestra directamente el tipo de dato, la longitud y lo que tiene dentro.
        echo "<p>La variable <span class='nombre'>".'$bRespuesta'."</span>: ";       
        var_dump($bRespuesta);        
        echo "</p>";
        
        echo "<p>La variable <span class='nombre'>".'$iEdad'."</span>: ";
        var_dump($iEdad);
        echo "</p>";
        
        echo "<p>La variable <span class='nombre'>".'$fSueldoHora'."</span>: ";
        var_dump($fSueldoHora);
        echo "</p>";
        
        echo "<p>La variable <span class='nombre'>".'$sNombre'."</span>: ";
        var_dump($sNombre);
        echo "</p>";
        ?>
    </body>
</html>

