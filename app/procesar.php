<?php
require_once 'includes/config.php';
include 'includes/datos.php';

// Recoger datos del formulario
$nombre = $_POST['nombre'] ?? '';
$dificultad = $_POST['dificultad'] ?? '';
$protagonista = $_POST['protagonista'] ?? '';

// Validación básica
if (empty($nombre) || empty($dificultad) || empty($protagonista)) {
    header('Location: index.php?error=Todos los campos son obligatorios');
    exit;
}

// Si todo es válido, redirigir a resultados con los parámetros por GET
$parametros = http_build_query([
    'nombre' => $nombre,
    'dificultad' => $dificultad,
    'protagonista' => $protagonista
]);

header('Location: resultados.php?' . $parametros);
exit;
?>