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
    <!-- linc texto-->
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
      <h2>Sobre la película</h2>
      <section class="audio-section">
        <h3>James Horner Pandora</h3>

        <audio controls>
          <source
            src="../recursos/audio/JamesHornerPandora.mp3"
            type="audio/mpeg"
          />
        </audio>
      </section>
      <h2>Franquicia “Avatar”</h2>
      <section class="audio-spoti">
        <iframe
          data-testid="embed-iframe"
          style="border-radius: 12px"
          src="https://open.spotify.com/embed/playlist/5xikFhBDZVLs3Cklcxnnki?utm_source=generator"
          width="100%"
          height="230"
          frameborder="0"
          allowfullscreen=""
          allow="
            autoplay;
            clipboard-write;
            encrypted-media;
            fullscreen;
            picture-in-picture;
          "
          loading="lazy"
        ></iframe>
        <iframe
          data-testid="embed-iframe"
          style="border-radius: 12px"
          src="https://open.spotify.com/embed/album/4M2Mf4pmARKGVT9MLCe3HA?utm_source=generator"
          width="100%"
          height="230"
          frameborder="0"
          allowfullscreen=""
          allow="
            autoplay;
            clipboard-write;
            encrypted-media;
            fullscreen;
            picture-in-picture;
          "
          loading="lazy"
        ></iframe>
        <iframe
          data-testid="embed-iframe"
          style="border-radius: 12px"
          src="https://open.spotify.com/embed/album/0GBCGznIeDr8yH18RRnfY2?utm_source=generator"
          width="100%"
          height="230"
          frameborder="0"
          allowfullscreen=""
          allow="
            autoplay;
            clipboard-write;
            encrypted-media;
            fullscreen;
            picture-in-picture;
          "
          loading="lazy"
        ></iframe>
      </section>

      <div>
        <img src="../recursos/img/3partes.jpg" alt="" width="100%" />
      </div>
      <p>
        La franquicia <strong class="nombre">“Avatar”</strong> es una saga de
        ciencia ficción a gran escala creada por James Cameron. Originalmente
        concebida como una pentalogía (cinco películas), hasta el momento se han
        estrenado tres partes, y la producción de las siguientes películas está
        en preparación activa.
      </p>
      <h2>Lista de películas de la trilogía</h2>
      <h3 class="nombre">“Avatar” (2009)</h3>
      <p>
        La primera película fue una revolución en el cine, generó un gran
        impacto en el campo de los efectos visuales y todavía sigue siendo la
        película más taquillera de la historia. La acción ocurre en el año 2154
        en el planeta ficticio Pandora. El ex marine Jake Sully (Sam
        Worthington) llega al planeta en lugar de su hermano científico
        fallecido. Para estudiar la cultura de los habitantes locales, los
        Na’vi, le crean un avatar — un cuerpo híbrido de Na’vi con la conciencia
        humana. Jake se enamora de la hija del líder del clan, Neytiri (Zoe
        Saldaña), y se pone del lado de los nativos. En el final, defiende al
        clan del ataque de los humanos que buscan el valioso mineral
        unobtainium.
      </p>
      <h3 class="nombre">“Avatar: El camino del agua” (2022)</h3>
      <p>
        La secuela se estrenó 13 años después de la primera parte. La historia
        ocurre más de 10 años después de los eventos del primer film. Jake y
        Neytiri formaron una familia y se convirtieron en líderes del clan. Los
        humanos regresan a Pandora con una nueva misión: no solo quieren
        recursos, sino también un lugar para una colonia humana debido al
        agotamiento de la Tierra. Para proteger a sus hijos, Jake lleva a su
        familia a las aguas costeras, donde buscan refugio en el clan Metkayina,
        unos buceadores que viven en armonía con el océano.
      </p>
      <h3 class="nombre">“Avatar: Fuego y ceniza” (2025)</h3>
      <p>
        Los eventos comienzan una semana después de la muerte del hijo mayor de
        la familia Sully, Neteyam, al final de “El camino del agua”. La familia
        atraviesa el duelo, pero continúa su camino. Los protagonistas se
        enfrentan a un clan Na’vi hostil: el Pueblo de las Cenizas (clan
        Mangkwan), liderado por la jefa Varang. Este clan representa una nueva
        amenaza para los habitantes de Pandora. La película también revela que
        no todos los Na’vi son pacíficos: algunos tienen su propia religión y
        declaran que la diosa del planeta, Eywa, está muerta.
      </p>
    </main>
    <?php
require '../componentes/footer.php';
?>
  </body>
</html>
