<?php
$errores = [];
$metodo = isset($_SERVER["REQUEST_METHOD"]) ? $_SERVER["REQUEST_METHOD"] : "";
$enviado = $metodo === "POST";
$motivosPermitidos = ["Presupuesto", "Consulta", "Reclamo"];
$respuestaMotivo = "";

if (!$enviado) {
  $errores[] = "No se recibieron datos del formulario.";
} else {
  $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
  $apellido = isset($_POST["apellido"]) ? trim($_POST["apellido"]) : "";
  $email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
  $motivo = isset($_POST["motivo"]) ? trim($_POST["motivo"]) : "";
  $mensaje = isset($_POST["mensaje"]) ? trim($_POST["mensaje"]) : "";

  if (empty($nombre)) {
    $errores[] = "El nombre es obligatorio.";
  }

  if (empty($apellido)) {
    $errores[] = "El apellido es obligatorio.";
  }

  if (empty($email)) {
    $errores[] = "El correo electrónico es obligatorio.";
  }

  if (empty($motivo)) {
    $errores[] = "El motivo es obligatorio.";
  } elseif (!in_array($motivo, $motivosPermitidos, true)) {
    $errores[] = "El motivo seleccionado no es válido.";
  }

  if (empty($mensaje)) {
    $errores[] = "El mensaje es obligatorio.";
  }

  if (!empty($nombre) && strlen($nombre) < 2) {
    $errores[] = "El nombre debe tener al menos 2 caracteres.";
  }

  if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no tiene un formato válido.";
  }

  if (empty($errores)) {
    $respuestaMotivo = match ($motivo) {
      "Presupuesto" => "Hemos recibido tu solicitud de presupuesto y nuestro equipo se pondrá en contacto con vos.",
      "Consulta" => "Hemos recibido tu consulta y la revisaremos a la brevedad.",
      "Reclamo" => "Hemos recibido tu reclamo y será analizado por el equipo correspondiente.",
    };
  }
}

$enviadoCorrectamente = $enviado && empty($errores);
?>
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
    <main class="confirmation-page">
      <?php if ($enviadoCorrectamente): ?>
        <h1>✓</h1>

        <h2>Mensaje enviado correctamente</h2>

        <p>
          Hola <?= htmlspecialchars($nombre . " " . $apellido, ENT_QUOTES, "UTF-8") ?>.
          <?= htmlspecialchars($respuestaMotivo, ENT_QUOTES, "UTF-8") ?>
        </p>

        <p>
          Hemos recibido correctamente tu consulta. Te enviaremos una respuesta a
          <a href="mailto:<?= htmlspecialchars($email, ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($email, ENT_QUOTES, "UTF-8") ?></a>.
        </p>

        <p>
          <strong>Nombre:</strong> <?= htmlspecialchars($nombre, ENT_QUOTES, "UTF-8") ?><br />
          <strong>Apellido:</strong> <?= htmlspecialchars($apellido, ENT_QUOTES, "UTF-8") ?><br />
          <strong>Email:</strong> <?= htmlspecialchars($email, ENT_QUOTES, "UTF-8") ?><br />
          <strong>Motivo:</strong> <?= htmlspecialchars($motivo, ENT_QUOTES, "UTF-8") ?><br />
          <strong>Mensaje:</strong> <?= nl2br(htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8")) ?>
        </p>
      <?php else: ?>
        <h1>!</h1>

        <h2>No se pudo enviar el mensaje</h2>

        <?php foreach ($errores as $error): ?>
          <p><?= htmlspecialchars($error, ENT_QUOTES, "UTF-8") ?></p>
        <?php endforeach; ?>

        <a class="btn-home" href="pagina6contacto.php"> Volver al formulario </a>
      <?php endif; ?>

      <a class="btn-home" href="../index.php"> Volver al inicio </a>
    </main>
    <?php require '../componentes/footer.php'; ?>
  </body>
</html>
