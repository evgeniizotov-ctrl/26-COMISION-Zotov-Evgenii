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
      <h2 id="Hechosypremios">"Hechos y premios"</h2>

      <div class="video-premios">
        <iframe
          width="800"
          height="450"
          src="https://www.youtube.com/embed/Sw9hdSjzZjc"
          title="Avatar Awards Ceremony"
          frameborder="0"
          allowfullscreen
        >
        </iframe>
      </div>

      <article>
        <p>
          La franquicia “Avatar” es una de las más galardonadas e influyentes
          del cine moderno. Desde el estreno de la primera película en 2009, la
          saga ha recibido reconocimiento mundial por su innovación técnica y su
          impacto en la industria cinematográfica.
        </p>

        <p>
          “Avatar” (2009) marcó un antes y un después en la historia del cine.
          La película fue premiada con tres premios Óscar, destacando
          especialmente sus efectos visuales revolucionarios, la dirección
          artística y la fotografía. Además, fue nominada en categorías
          principales como mejor película y mejor director.
        </p>
        <div>
          <img src="../recursos/img/premia1.jfif" alt="" width="30%" />
          <img src="../recursos/img/premia2.jfif" alt="" width="30%" />
          <img src="../recursos/img/premia3.jfif" alt="" width="30%" />
        </div>

        <p>
          “Avatar: El camino del agua” (2022) continuó este legado tecnológico,
          siendo reconocida por sus avances en la captura de movimiento bajo el
          agua y su impresionante calidad visual. La película recibió una
          nominación al Óscar a mejores efectos visuales.
        </p>

        <p>
          En conjunto, la saga “Avatar” es considerada un hito en la historia
          del cine contemporáneo, no solo por sus premios, sino también por
          haber impulsado nuevas tecnologías y redefinido los estándares de
          producción audiovisual.
        </p>
      </article>
    </main>
    <?php
require '../componentes/footer.php';
?>
  </body>
</html>
