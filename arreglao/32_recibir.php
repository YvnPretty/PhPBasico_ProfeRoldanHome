<?php

echo "<h1>Datos Recibidos (POST)</h1>";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];

    echo "Usuario: $usuario<br>";
    echo "Password: " . str_repeat("*", strlen($pass));
} else {
    echo "No hay datos.";
}

?>

<br>
<a href="32_post.php">Volver</a>