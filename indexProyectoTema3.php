<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto Tema 3 PHP - Caracteristicas de PHP</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Inter:wght@400;500;600;700;800&family=UnifrakturMaguntia&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../webroot/css/styles.css">
  <link rel="stylesheet" href="webroot/css/estilos.css">
</head>
<body class="pagina-ajustada">
  <!-- Bloque: Cabecera -->
  <header id="site-header" class="cabecera">
    <div class="cabecera__contenedor">
      <img class="monograma" src="../webroot/images/cruz.png" alt="">
      <h1 class="titulo-header">TEMA 3: Caracteristicas del lenguaje PHP</h1>
      <!-- <img class="cabecera__banner" src="../webroot/images/titulo-pagina.png" alt="Moisés Alberto Domínguez Cruz"> -->
      <img class="monograma" src="../webroot/images/cruz.png" alt="">
    </div>
  </header>

  <main>
    <div class="container">
        <a href='../MDCDWESProyectoDWES/indexProyectoDWES.php'>⬅ Volver al inicio</a><hr>
        <p>Panel de control de ejercicios de la asignatura.</p>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre de la Práctica</th>
                    <th>Ejecutar</th>
                    <th>Código Fuente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>Ejercicio (Hola Mundo)</td>
                    <td>
                        <a href="codigoPHP/ejercicio00.php" class="btn btn-ejecutar">▶ Ejecutar</a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio00.php" class="btn btn-codigo">Ver Código</a>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Ejercicio inicializar variables de distintos tipos</td>
                    <td>
                        <a href="codigoPHP/ejercicio01.php" class="btn btn-ejecutar">▶ Ejecutar</a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio01.php" class="btn btn-codigo">Ver Código</a>
                    </td>
                </tr>
                
                <tr>
                    <td>2</td>
                    <td>Ejercicio inicializar y mostrar una variable heredoc</td>
                    <td>
                        <a href="codigoPHP/ejercicio02.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio02.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>3</td>
                    <td>Ejercicio mostrar en tu página index la fecha y hora actual formateada en castellano</td>
                    <td>
                        <a href="codigoPHP/ejercicio03.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio03.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>4</td>
                    <td>Ejercicio mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués</td>
                    <td>
                        <a href="codigoPHP/ejercicio04.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio04.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>5</td>
                    <td>Ejercicio inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</td>
                    <td>
                        <a href="codigoPHP/ejercicio05.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio05.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>6</td>
                    <td>Ejercicio Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días</td>
                    <td>
                        <a href="codigoPHP/ejercicio06.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio06.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>7</td>
                    <td>Ejercicio mostrar el nombre del fichero que se está ejecutando</td>
                    <td>
                        <a href="codigoPHP/ejercicio07.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio07.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>8</td>
                    <td>Ejercicio mostrar la dirección IP del equipo desde el que estás accediendo</td>
                    <td>
                        <a href="codigoPHP/ejercicio08.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio08.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>9</td>
                    <td>Ejercicio mostrar el path donde se encuentra el fichero que se está ejecutando</td>
                    <td>
                        <a href="codigoPHP/ejercicio09.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio09.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>10</td>
                    <td>Ejercicio mostrar el contenido del fichero que se está ejecutando</td>
                    <td>
                        <a href="codigoPHP/ejercicio10.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio10.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>11</td>
                    <td>Ejercicio mostrar el documento PHPDoc del proyecto que se está ejecutando generado con PHP Documentor o ApiGen</td>
                    <td>
                        <a href="codigoPHP/ejercicio11.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio11.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>12</td>
                    <td>Ejercicio mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())</td>
                    <td>
                        <a href="codigoPHP/ejercicio12.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio12.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
                
                <tr>
                    <td>13</td>
                    <td>Ejercicio crear una función que cuente el número de visitas a la página actual desde una fecha concreta</td>
                    <td>
                        <a href="codigoPHP/ejercicio13.php" class="btn btn-ejecutar"></a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/muestraEjercicio13.php" class="btn btn-codigo"></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </main>

  <!-- Bloque: Pie -->
  <footer class="pie">
    <div class="pie__redes">
      <a class="pie__red" href="https://github.com/moisesdcsauces/MDCDWESProyectoTema3" target="_blank" rel="noopener" aria-label="GitHub">
        <img src="../webroot/images/icons/github.png" alt="">
      </a>
      <a class="pie__red" href="https://www.linkedin.com/in/mois%C3%A9s-alberto-dom%C3%ADnguez-cruz/" target="_blank" rel="noopener" aria-label="LinkedIn">
        <img src="../webroot/images/icons/linkedin.png" alt="">
      </a>
    </div>
      <p class="pie__texto">© <a class="titulo-enlace" href="../index.html"> Moisés Alberto Domínguez Cruz</a> - IES Los Sauces<span id="year"></span></p>
  </footer>

  <script src="../webroot/js/main.js" defer></script>
</body>
</html>
