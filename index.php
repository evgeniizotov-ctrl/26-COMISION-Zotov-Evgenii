<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Avatar</title>
    <link rel="stylesheet" href="./recursos/estilos/general.css" />
    <link rel="stylesheet" href="recursos/estilos/animaciones.css" />
    <!-- linc mi css -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Playwrite+NZ+Guides&display=swap"
      rel="stylesheet"
    />
    <!-- linc texto -->
    <link rel="icon" href="./recursos/img/favicon.jpg" type="image" />
    <!-- iconos -->
  </head>

  <!-- alt + shift + a - comentarios -->
  <!-- ctrl + s - GUARDAR  -->

  <body>
    <?php
$base = '';
require 'componentes/header.php';
?>

    <main>
      <div class="video-container">
        <video class="video-fondo" autoplay muted loop id="background-video">
          <source src="recursos/video/avatarvideo.mp4" type="video/mp4" />
        </video>
      </div>

      <h2>El universo de Avatar:</h2>

      <?php
      $avatarItems = [
          [
              'titulo' => 'Avatar',
              'tipo' => 'pelicula',
              'imagen' => 'recursos/img/avatar_800x1200_208c9665.jpeg',
              'descripcion' => 'En el año 2154, Jake Sully, un ex marine, llega a Pandora y conoce la cultura del pueblo Na’vi. Allí deberá elegir entre ayudar a los humanos o defender la luna en una gran batalla.',
              'detalles' => 'Director: James Cameron. Actores: Sam Worthington, Zoe Saldaña, Sigourney Weaver.',
              'estreno' => 2009,
              'enlace' => 'https://www.youtube.com/watch?v=5PSNL1qE6VY&t=32s'
          ],
          [
              'titulo' => 'Avatar: El camino del agua',
              'tipo' => 'pelicula',
              'imagen' => 'recursos/img/AvatarElcaminodelagua.jpeg',
              'descripcion' => 'Jake Sully y Neytiri viven con su familia en Pandora, pero nuevos peligros los obligan a buscar refugio con otros clanes Na’vi y a proteger su hogar.',
              'detalles' => 'Director: James Cameron. Productor: James Cameron y Jon Landau. Actores: Sam Worthington, Zoe Saldaña y Kate Winslet.',
              'estreno' => 2022,
              'enlace' => 'https://www.youtube.com/watch?v=d9MyW72ELq0'
          ],
          [
              'titulo' => 'Avatar: Fuego y ceniza',
              'tipo' => 'pelicula',
              'imagen' => 'recursos/img/AvatarFuegoyceniza.jpeg',
              'descripcion' => 'Jake Sully, Neytiri y su familia regresan a Pandora para enfrentar nuevos peligros y proteger su mundo en una aventura llena de acción.',
              'detalles' => 'Director: James Cameron. Productor: James Cameron y Jon Landau.',
              'estreno' => 2025,
              'enlace' => 'https://www.youtube.com/watch?v=nb_fFj_0rq8&t=4s'
          ],
          [
              'titulo' => 'Avatar 4',
              'tipo' => 'pelicula',
              'imagen' => 'recursos/img/Avatar4.JFIF',
              'descripcion' => 'La cuarta película continuará la historia de la familia Sully y sus nuevas aventuras en Pandora.',
              'detalles' => 'Próxima película de la saga Avatar.',
              'estreno' => 2029,
              'enlace' => 'https://www.youtube.com/shorts/Lerv3sj41t4'
          ],
          [
              'titulo' => 'Avatar: Frontiers of Pandora',
              'tipo' => 'juego',
              'imagen' => 'recursos/img/Frontiers_of_Pandora.JFIF',
              'descripcion' => 'Videojuego de aventura ambientado en Pandora, donde el jugador explora el mundo y defiende el territorio Na’vi.',
              'detalles' => 'Videojuego oficial de Avatar.',
              'estreno' => 2023,
              'enlace' => 'https://www.youtube.com/watch?v=5XMojNXFmkc'
          ],
          [
              'titulo' => 'TORUK – The First Flight',
              'tipo' => 'show',
              'imagen' => 'recursos/img/TORUK.JFIF',
              'descripcion' => 'Espectáculo de Cirque du Soleil inspirado en el universo de Avatar y en las historias del pueblo Na’vi.',
              'detalles' => 'Show oficial y precuela de Avatar.',
              'estreno' => 2015,
              'enlace' => 'https://www.youtube.com/watch?v=0c3mnVPkwhM'
          ]
      ];
      ?>

      <?php foreach ($avatarItems as $avatarItem): ?>
        <?php
        $esFuturo = $avatarItem['estreno'] > date('Y');
        $estadoClase = $esFuturo ? 'proximo' : 'disponible';
        $estadoTexto = $esFuturo ? 'PRÓXIMAMENTE' : 'DISPONIBLE';
        ?>
        <section class="avatar-card <?= $estadoClase ?>">
          <img src="<?= $avatarItem['imagen'] ?>" alt="<?= $avatarItem['titulo'] ?>" />
          <div>
            <h4><?= $avatarItem['titulo'] ?></h4>
            <p>
              <?php if ($avatarItem['tipo'] === 'pelicula'): ?>
                Película | Estreno: <?= $avatarItem['estreno'] ?> | Acción, aventura y ciencia ficción
              <?php elseif ($avatarItem['tipo'] === 'juego'): ?>
                Videojuego oficial | Lanzamiento: <?= $avatarItem['estreno'] ?>
              <?php else: ?>
                Show oficial | Estreno: <?= $avatarItem['estreno'] ?>
              <?php endif; ?>
            </p>
            <p><?= $avatarItem['descripcion'] ?></p>
            <p><?= $avatarItem['detalles'] ?></p>
            <span class="item-status <?= $estadoClase ?>"><?= $estadoTexto ?></span>
            <a class="trailer-btn" href="<?= $avatarItem['enlace'] ?>" target="_blank">
              ▶ Ver tráiler
            </a>
          </div>
        </section>
      <?php endforeach; ?>
    </main>

    <?php
require 'componentes/footer.php';
?>
  </body>
</html>
