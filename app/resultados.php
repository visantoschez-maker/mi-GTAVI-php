<?php
require_once 'includes/config.php';
include 'includes/datos.php';
include 'includes/funciones.php';
include 'includes/header.php';

// Recoger datos de la URL (GET)
$nombre = $_GET['nombre'] ?? 'Agente anónimo';
$dificultad = $_GET['dificultad'] ?? 'Fácil';
$protagonista = $_GET['protagonista'] ?? '';

// Filtrar misiones según la dificultad seleccionada
$misionesFiltradas = filtrarPorDificultad($misiones, $dificultad);

// Calcular recompensa total
$totalRecompensa = calcularRecompensaTotal($misionesFiltradas);
?>

<h2>📋 Resultados de la operación</h2>

<p><?php echo saludarAgente($nombre); ?></p>
<p><strong>Dificultad seleccionada:</strong> <?php echo htmlspecialchars($dificultad); ?></p>
<p><strong>Protagonista asignado:</strong> <?php echo htmlspecialchars($personajes[$protagonista] ?? $protagonista); ?></p>

<hr>

<h3>🎯 Misiones asignadas (<?php echo count($misionesFiltradas); ?>)</h3>

<?php if (count($misionesFiltradas) > 0): ?>
    <?php foreach ($misionesFiltradas as $mision): ?>
        <div class="card">
            <h4><?php echo htmlspecialchars($mision['nombre']); ?></h4>
            <p><?php echo htmlspecialchars($mision['descripcion']); ?></p>
            <p>
                <span class="badge"><?php echo htmlspecialchars($mision['dificultad']); ?></span>
                <strong>Recompensa:</strong> <?php echo MONEDA . ' ' . number_format($mision['recompensa'], 0, ',', '.'); ?>
            </p>
            <p><strong>Protagonista original:</strong> <?php echo htmlspecialchars($mision['protagonista']); ?></p>
        </div>
            <?php
            // Generar estrellas según dificultad
            $estrellas = 1;
            if ($mision['dificultad'] === 'Media') $estrellas = 2;
            if ($mision['dificultad'] === 'Difícil') $estrellas = 3;

            echo "<p>Dificultad: ";
            for ($i = 0; $i < $estrellas; $i++) {
             echo "⭐";
            }
            echo "</p>";
            ?>
    <?php endforeach; ?>
<?php else: ?>
    <div class="card">
        <p>No hay misiones disponibles con esa dificultad. ¡Prueba con otra!</p>
    </div>
<?php endif; ?>

<hr>

<h3>💰 Resumen económico</h3>
<div class="card">
    <p><strong>Recompensa total:</strong> <?php echo MONEDA . ' ' . number_format($totalRecompensa, 0, ',', '.'); ?></p>
    <p><strong>Número de misiones:</strong> <?php echo count($misionesFiltradas); ?></p>
</div>

<p><a href="index.php">← Volver a asignar otra misión</a></p>

<?php include 'includes/footer.php'; ?>