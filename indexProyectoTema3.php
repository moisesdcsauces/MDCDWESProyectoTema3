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
  <link rel="stylesheet" href="webroot/css/estilo.css">
</head>
<body class="pagina-ajustada">
  <!-- Bloque: Cabecera -->
  <header id="site-header" class="cabecera">
    <div class="cabecera__contenedor">
      <img class="monograma" src="../webroot/images/cruz.png" alt="">
      <img class="cabecera__banner" src="../webroot/images/titulo-pagina.png" alt="Moisés Alberto Domínguez Cruz">
      <img class="monograma" src="../webroot/images/cruz.png" alt="">
    </div>
  </header>

  <main>
    <div class="container">
        <a href='../MDCDWESProyectoDWES/indexProyectoDWES.php'>⬅ Volver al inicio</a><hr>
        <h1>Tema 3: Caracteristicas del lenguaje PHP</h1>
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
            </tbody>
        </table>
    </div>
  </main>

  <!-- Bloque: Pie -->
  <footer class="pie">
    <div class="pie__redes">
      <a class="pie__red" href="https://github.com/moisesdcsauces" target="_blank" rel="noopener" aria-label="GitHub">
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
