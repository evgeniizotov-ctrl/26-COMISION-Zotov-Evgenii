<?php
$base = '../';
require_once __DIR__ . '/../componentes/sesion.php';
require_once __DIR__ . '/../componentes/conexion.php';

$mensaje = "";
$titulo = "";
$tipo = "pelicula";
$imagen = "";
$descripcion = "";
$detalles = "";
$anioTexto = "";
$enlace = "";

$imagenesPermitidas = array(
  "recursos/img/avatar_800x1200_208c9665.jpeg",
  "recursos/img/AvatarElcaminodelagua.jpeg",
  "recursos/img/AvatarFuegoyceniza.jpeg",
  "recursos/img/Frontiers_of_Pandora.jfif",
  "recursos/img/Sam_Worthington.jpg",
  "recursos/img/ZoeSaldana.jpeg",
  "recursos/img/Sigourney Weaver.jpeg",
  "recursos/img/KateWinslet.jpeg"
);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $titulo = isset($_POST["titulo"]) && is_string($_POST["titulo"]) ? trim($_POST["titulo"]) : "";
  $tipo = isset($_POST["tipo"]) && is_string($_POST["tipo"]) ? trim($_POST["tipo"]) : "";
  $imagen = isset($_POST["imagen"]) && is_string($_POST["imagen"]) ? trim($_POST["imagen"]) : "";
  $descripcion = isset($_POST["descripcion"]) && is_string($_POST["descripcion"]) ? trim($_POST["descripcion"]) : "";
  $detalles = isset($_POST["detalles"]) && is_string($_POST["detalles"]) ? trim($_POST["detalles"]) : "";
  $anioTexto = isset($_POST["anio"]) && is_string($_POST["anio"]) ? trim($_POST["anio"]) : "";
  $enlace = isset($_POST["enlace"]) && is_string($_POST["enlace"]) ? trim($_POST["enlace"]) : "";

  if (empty($titulo) || empty($descripcion) || empty($imagen)) {
    $mensaje = "Completa el titulo, la descripcion y la imagen.";
  } elseif (
    $tipo !== "pelicula" &&
    $tipo !== "juego" &&
    $tipo !== "personaje"
  ) {
    $mensaje = "El tipo elegido no es correcto.";
  } elseif (!in_array($imagen, $imagenesPermitidas)) {
    $mensaje = "Elige una imagen de la lista.";
  } elseif (
    !empty($anioTexto) &&
    (filter_var($anioTexto, FILTER_VALIDATE_INT) === false || (int) $anioTexto < 1800 || (int) $anioTexto > 2100)
  ) {
    $mensaje = "El ano tiene que ser un numero entero entre 1800 y 2100.";
  } elseif (!empty($enlace) && !filter_var($enlace, FILTER_VALIDATE_URL)) {
    $mensaje = "El enlace no parece correcto.";
  } else {
    $anio = null;
    if (!empty($anioTexto)) {
      $anio = (int) $anioTexto;
    }

    $consulta = mysqli_prepare(
      $conexion,
      "INSERT INTO catalogo (titulo, tipo, imagen, descripcion, detalles, anio, enlace) VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    if ($consulta) {
      mysqli_stmt_bind_param(
        $consulta,
        "sssssis",
        $titulo,
        $tipo,
        $imagen,
        $descripcion,
        $detalles,
        $anio,
        $enlace
      );

      if (mysqli_stmt_execute($consulta)) {
        $_SESSION["mensaje"] = "El material se agrego correctamente.";
        header("Location: ../paginas/catalogo.php");
        exit;
      } else {
        $mensaje = "No se pudo guardar el material.";
      }
    } else {
      $mensaje = "No se pudo preparar el guardado.";
    }
  }
}
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agregar material</title>
    <link rel="stylesheet" href="../recursos/estilos/general.css" />
    <link rel="stylesheet" href="../recursos/estilos/paginas.css" />
    <link rel="stylesheet" href="../recursos/estilos/animaciones.css" />
    <link rel="icon" href="../recursos/img/favicon.jpg" type="image" />
  </head>

  <body>
    <?php require __DIR__ . '/../componentes/header.php'; ?>

    <main>
      <h2>Agregar material al catalogo</h2>

      <?php if (!empty($mensaje)): ?>
        <p><?= htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>

      <form method="POST" action="crear.php">
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="<?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?>" required />

        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo" required>
          <option value="pelicula" <?= $tipo === 'pelicula' ? 'selected' : '' ?>>Pelicula</option>
          <option value="juego" <?= $tipo === 'juego' ? 'selected' : '' ?>>Videojuego</option>
          <option value="personaje" <?= $tipo === 'personaje' ? 'selected' : '' ?>>Personaje</option>
        </select>

        <label for="imagen">Imagen:</label>
        <select name="imagen" id="imagen" required>
          <option value="">Elige una imagen</option>
          <?php foreach ($imagenesPermitidas as $rutaImagen): ?>
            <option value="<?= htmlspecialchars($rutaImagen, ENT_QUOTES, 'UTF-8') ?>" <?= $imagen === $rutaImagen ? 'selected' : '' ?>>
              <?= htmlspecialchars(basename($rutaImagen), ENT_QUOTES, 'UTF-8') ?>
            </option>
          <?php endforeach; ?>
        </select>

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="descripcion" required><?= htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8') ?></textarea>

        <label for="detalles">Detalles adicionales:</label>
        <textarea name="detalles" id="detalles"><?= htmlspecialchars($detalles, ENT_QUOTES, 'UTF-8') ?></textarea>

        <label for="anio">Ano (opcional):</label>
        <input type="number" name="anio" id="anio" value="<?= htmlspecialchars($anioTexto, ENT_QUOTES, 'UTF-8') ?>" />

        <label for="enlace">Enlace (opcional):</label>
        <input type="url" name="enlace" id="enlace" value="<?= htmlspecialchars($enlace, ENT_QUOTES, 'UTF-8') ?>" />

        <button type="submit">Guardar material</button>
      </form>

      <p><a href="../paginas/catalogo.php">Volver al catalogo</a></p>
    </main>

    <?php require __DIR__ . '/../componentes/footer.php'; ?>
  </body>
</html>
