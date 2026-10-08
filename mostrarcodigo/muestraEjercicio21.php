<?php
$archivo = '../codigoPHP/ejercicio21.php';

if ($archivo && file_exists($archivo)) {
    echo "<h2>Viendo el codigo de: " . htmlspecialchars($archivo) . "</h2>";
    echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a><hr>";
    
    // funcion nativa de PHP, lee el archivo y lo imprime con colores.
    highlight_file($archivo);
} else {
    echo "<h2>Error: El archivo no existe.</h2>";
    echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a>";
}

$archivoTratamiento = '../codigoPHP/Tratamiento.php';
 
if ($archivoTratamiento && file_exists($archivoTratamiento)) {
    echo "<h2>Viendo el codigo de: " . htmlspecialchars($archivoTratamiento) . "</h2>";
    // funcion nativa de PHP, lee el archivo y lo imprime con colores.
    highlight_file($archivoTratamiento);
} else {
    echo "<h2>Error: El archivo no existe.</h2>";
    echo "<a href='../indexProyectoTema3.php'>⬅ Volver al inicio</a>";
}
?>

