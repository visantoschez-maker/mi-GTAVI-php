<?php
require_once 'includes/config.php';
include 'includes/datos.php';
include 'includes/header.php';
?>

<h2>Registro de personaje</h2>

<?php if (isset($_GET['error'])): ?>
    <div class="card" style="border-left-color: #e74c3c;">
        <strong>Error:</strong> <?php echo htmlspecialchars($_GET['error']); ?>
    </div>
<?php endif; ?>

<form action="procesar.php" method="POST">
    <label for="nombre">Nombre del personaje:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Ej: Michael" required>

    <label for="dificultad">Dificultad de la misión:</label>
    <select id="dificultad" name="dificultad" required>
        <option value="">-- Selecciona --</option>
        <?php foreach ($dificultades as $d): ?>
            <option value="<?php echo $d; ?>"><?php echo $d; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="protagonista">Protagonista:</label>
    <select id="protagonista" name="protagonista" required>
        <option value="">-- Selecciona --</option>
        <?php foreach ($personajes as $clave => $nombreCompleto): ?>
            <option value="<?php echo $clave; ?>"><?php echo $nombreCompleto; ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Asignar misión</button>
</form>

<?php include 'includes/footer.php'; ?>