<?php
/*
Credenciales para la conexion DB
--------------------------------
*/

$contraseña = "806d78b8d6dcc6f335c74ae63e030276a2510ec806df78a69ea0549d0c4e1a4b";
$usuario = "tveewimejuvanw";
$nombreBaseDeDatos = "dfq3t7i0k1q4sd";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP del servidor remoto
$rutaServidor = "ec2-3-217-251-77.compute-1.amazonaws.com";
$puerto = "5432";

try {
  $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
  $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}
