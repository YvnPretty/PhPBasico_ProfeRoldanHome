<?php

echo "<h1>Datos Recibidos (GET)</h1>";

if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    echo "<p>Hola $nombre, tienes $edad años.</p>";
} else {
    echo "<p>No hay datos.</p>";
}

?>

<br>
<a href="31_get.php">Volver</a>