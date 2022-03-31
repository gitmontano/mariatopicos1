<?php
$rutaServidor = "localhost";
$puerto = "5432";
$nombreBaseDeDatos = "protectopicos";
$usuario = "postgres";
$contraseña = "123456";


try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
