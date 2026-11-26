<?php

/**
 * Calcula la recompensa total de un array de misiones.
 * @param array $listaMisiones Array de misiones (cada una con clave 'recompensa').
 * @return int Suma total de recompensas.
 */
function calcularRecompensaTotal(array $listaMisiones): int {
    $total = 0;
    foreach ($listaMisiones as $mision) {
        $total += $mision['recompensa'];
    }
    return $total;
}

/**
 * Filtra misiones por dificultad.
 * @param array $listaMisiones Array completo de misiones.
 * @param string $dificultad Dificultad a filtrar ('Fácil', 'Media', 'Difícil').
 * @return array Subarray con las misiones que coinciden.
 */
function filtrarPorDificultad(array $listaMisiones, string $dificultad): array {
    $resultado = [];
    foreach ($listaMisiones as $mision) {
        if ($mision['dificultad'] === $dificultad) {
            $resultado[] = $mision;
        }
    }
    return $resultado;
}

/**
 * Genera un saludo personalizado para el agente.
 * @param string $nombre Nombre del personaje.
 * @return string Mensaje de bienvenida.
 */
function saludarAgente(string $nombre): string {
    return "Agente <strong>" . htmlspecialchars($nombre) . "</strong>, bienvenido a " . CIUDAD . ".";
}

function obtenerMisionMasCara($misiones) {
    if (empty($misiones)) {
        return null;
    }

    $misionMasCara = $misiones[0];

    foreach ($misiones as $mision) {
        if ($mision['recompensa'] > $misionMasCara['recompensa']) {
            $misionMasCara = $mision;
        }
    }

    return $misionMasCara;
}
?>
