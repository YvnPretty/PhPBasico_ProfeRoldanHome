<?php

session_start();

if (isset($_SESSION['usuario'])) {
    echo "Bienvenido de nuevo, " . $_SESSION['usuario'];
} else {
    echo "No has iniciado sesión.";
}

?>

<br>
<a href="40_logout.php">Cerrar Sesión</a>