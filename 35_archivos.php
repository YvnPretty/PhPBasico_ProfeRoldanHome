<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['archivo'])) {
    $carpetaDestino = "subidos/";
    $nombreArchivo = $_FILES['archivo']['name'];
    $rutaTemporal = $_FILES['archivo']['tmp_name'];
    $rutaFinal = $carpetaDestino . basename($nombreArchivo);

    if (move_uploaded_file($rutaTemporal, $rutaFinal)) {
        echo "<p>Archivo '$nombreArchivo' subido.</p>";
    } else {
        echo "<p>Error al subir.</p>";
    }
}
?>

<h1>Subir Archivos</h1>

<form action="35_archivos.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="archivo" required>
    <button type="submit">Subir</button>
</form>

<hr>
<h3>Archivos subidos:</h3>
<ul>
    <?php
    if (is_dir("subidos")) {
        $archivos = array_diff(scandir("subidos"), array('..', '.'));
        foreach ($archivos as $archivo) {
            echo "<li><a href='subidos/$archivo' target='_blank'>$archivo</a></li>";
        }
    }
    ?>
</ul>