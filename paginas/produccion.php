<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avatar</title>
    <link rel="stylesheet" href="../recursos/estilos/general.css" />

    <link rel="stylesheet" href="../recursos/estilos/paginas.css" />
    <link rel="stylesheet" href="../recursos/estilos/animaciones.css" />
    <!-- linc texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Playwrite+NZ+Guides&display=swap"
      rel="stylesheet"
    />
    <!-- linc texto -->
    <link rel="icon" href="../recursos/img/favicon.jpg" type="image" />
    <!-- iconos -->
  </head>

  <!-- alt + shift + a - comentarios -->
  <!-- ctrl + s - GUARDAR  -->

  <body>
    <?php
$base = '../';
require '../componentes/header.php';
?>
    <main>
      <h2 id="Producción">Produccion</h2>
      <p>
        La producción de la saga “Avatar” es una de las más ambiciosas en la
        historia del cine. James Cameron comenzó a desarrollar el proyecto
        muchos años antes del estreno de la primera película, trabajando en
        nuevas tecnologías para crear un mundo completamente digital y realista.
      </p>
      <div>
        <img src="../recursos/img/produccion.jpg" alt="" width="30%" />
        <img src="../recursos/img/produccion2.jpg" alt="" width="30%" />
        <img src="../recursos/img/produccion3.jpg" alt="" width="30%" />
      </div>

      <p>
        Gran parte del proceso de filmación se realizó utilizando tecnología de
        captura de movimiento avanzada, permitiendo que los actores
        interpretaran a sus personajes en un entorno virtual. Esto revolucionó
        la forma de hacer películas de ciencia ficción.
      </p>

      <p>
        Las secuelas fueron filmadas de manera consecutiva para mantener la
        continuidad de la historia y optimizar la producción. Además, el equipo
        trabajó durante años en el desarrollo de los efectos visuales y los
        escenarios submarinos de Pandora.
      </p>
    </main>
    <?php
require '../componentes/footer.php';
?>
  </body>
</html>
