<?php
$base = '../';
require_once __DIR__ . '/../componentes/sesion.php';
require_once __DIR__ . '/../componentes/conexion.php';

$mensaje = "";
if (isset($_SESSION["mensaje"])) {
  $mensaje = $_SESSION["mensaje"];
  unset($_SESSION["mensaje"]);
}

$tipoElegido = "todos";

if (isset($_GET['tipo'])) {
  if (is_string($_GET['tipo'])) {
    $tipoElegido = $_GET['tipo'];
  }
} elseif (isset($_COOKIE['tipo_catalogo'])) {
  if (is_string($_COOKIE['tipo_catalogo'])) {
    $tipoElegido = $_COOKIE['tipo_catalogo'];
  }
}

// Aceptamos solo las categorias que existen en nuestro catalogo.
if (
  $tipoElegido !== "todos" &&
  $tipoElegido !== "pelicula" &&
  $tipoElegido !== "juego" &&
  $tipoElegido !== "personaje"
) {
  $tipoElegido = "todos";
}

// Recordamos la categoria durante 30 dias cuando el visitante usa el filtro.
if (isset($_GET['tipo'])) {
  setcookie("tipo_catalogo", $tipoElegido, time() + (30 * 24 * 60 * 60), "/");
}

if ($tipoElegido === "todos") {
  $resultado = mysqli_query($conexion, "SELECT * FROM catalogo ORDER BY id");
} else {
  $consulta = mysqli_prepare($conexion, "SELECT * FROM catalogo WHERE tipo = ? ORDER BY id");
  if ($consulta) {
    mysqli_stmt_bind_param($consulta, "s", $tipoElegido);
    mysqli_stmt_execute($consulta);
    $resultado = mysqli_stmt_get_result($consulta);
  } else {
    $resultado = false;
  }
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalogo de Avatar</title>
    <link rel="stylesheet" href="../recursos/estilos/general.css" />
    <link rel="stylesheet" href="../recursos/estilos/paginas.css" />
    <link rel="stylesheet" href="../recursos/estilos/animaciones.css" />
    <link rel="icon" href="../recursos/img/favicon.jpg" type="image" />
  </head>

  <body>
    <?php require __DIR__ . '/../componentes/header.php'; ?>

    <main>
      <h2>Catalogo del universo Avatar</h2>

      <?php if (!empty($mensaje)): ?>
        <p><?= htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>

      <form method="GET" action="catalogo.php">
        <label for="tipo">Filtrar por tipo:</label>
        <select name="tipo" id="tipo">
          <option value="todos" <?= $tipoElegido === 'todos' ? 'selected' : '' ?>>Todos</option>
          <option value="pelicula" <?= $tipoElegido === 'pelicula' ? 'selected' : '' ?>>Peliculas</option>
          <option value="juego" <?= $tipoElegido === 'juego' ? 'selected' : '' ?>>Videojuego</option>
          <option value="personaje" <?= $tipoElegido === 'personaje' ? 'selected' : '' ?>>Personajes</option>
        </select>
        <button type="submit">Filtrar</button>
      </form>

      <p><a href="../admin/crear.php">Agregar material</a></p>

      <?php if ($resultado): ?>
        <?php if (mysqli_num_rows($resultado) > 0): ?>
          <?php while ($elemento = mysqli_fetch_assoc($resultado)): ?>
            <section class="avatar-card disponible">
              <img
                src="../<?= htmlspecialchars($elemento['imagen'], ENT_QUOTES, 'UTF-8') ?>"
                alt="<?= htmlspecialchars($elemento['titulo'], ENT_QUOTES, 'UTF-8') ?>"
              />

              <div>
                <h3><?= htmlspecialchars($elemento['titulo'], ENT_QUOTES, 'UTF-8') ?></h3>

                <p>
                  <?php if ($elemento['tipo'] === 'pelicula'): ?>
                    Pelicula
                  <?php elseif ($elemento['tipo'] === 'juego'): ?>
                    Videojuego
                  <?php else: ?>
                    Personaje
                  <?php endif; ?>

                  <?php if (!empty($elemento['anio'])): ?>
                    | Ano: <?= htmlspecialchars($elemento['anio'], ENT_QUOTES, 'UTF-8') ?>
                  <?php endif; ?>
                </p>

                <p><?= htmlspecialchars($elemento['descripcion'], ENT_QUOTES, 'UTF-8') ?></p>
                <p><?= htmlspecialchars($elemento['detalles'], ENT_QUOTES, 'UTF-8') ?></p>

                <?php if (!empty($elemento['enlace'])): ?>
                  <a class="trailer-btn" href="<?= htmlspecialchars($elemento['enlace'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                    Ver mas informacion
                  </a>
                <?php endif; ?>
                <a href="../admin/editar.php?id=<?= (int) $elemento['id'] ?>">Editar material</a>
              </div>
            </section>
          <?php endwhile; ?>
        <?php else: ?>
          <p>Todavia no hay materiales en el catalogo.</p>
        <?php endif; ?>
      <?php else: ?>
        <p>No se pudo cargar el catalogo.</p>
      <?php endif; ?>
    </main>

    <?php require __DIR__ . '/../componentes/footer.php'; ?>
  </body>
</html>
