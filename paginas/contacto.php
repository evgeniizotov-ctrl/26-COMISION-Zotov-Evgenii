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
    <?php $base = '../'; require '../componentes/header.php'; ?>
    <main>
      <section>
        <h3 class="nombre" id="contactos">Contacto</h3>

        <form action="confirmacion.php" method="POST">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" required />

          <label for="apellido">Apellido</label>
          <input type="text" id="apellido" name="apellido" required />

          <label for="email">Correo electrónico</label>
          <input type="email" id="email" name="email" required />

          <label for="motivo">Motivo</label>
          <select id="motivo" name="motivo" required>
            <option value="">Seleccioná un motivo</option>
            <option value="Presupuesto">Presupuesto</option>
            <option value="Consulta">Consulta</option>
            <option value="Reclamo">Reclamo</option>
          </select>

          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" required></textarea>

          <button type="submit">Enviar</button>
        </form>
      </section>
      <div>
        <img
          src="../recursos/img/e91ff11e69d51afb96ccaf8a1fc54b2e.jpg"
          alt="img"
          width="100%"
          height="200"
        />
      </div>
    </main>
    <?php require '../componentes/footer.php'; ?>
  </body>
</html>
