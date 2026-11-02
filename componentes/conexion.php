<?php

// Datos para conectar con MySQL en XAMPP.
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDatos = "avatar_universe";

// Abrimos la conexion con la base de datos.
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $baseDatos);

// Si hay un error, guardamos el detalle en el registro del servidor
// y mostramos un mensaje sencillo en la pagina.
if (!$conexion) {
    error_log("Error de conexion MySQL: " . mysqli_connect_error());
    die("No se pudo conectar con la base de datos.");
}

// Usamos UTF-8 para que se vean bien los acentos y la letra ñ.
mysqli_set_charset($conexion, "utf8mb4");

?>
