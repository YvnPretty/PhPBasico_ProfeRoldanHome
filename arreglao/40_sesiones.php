<?php

session_start();

$_SESSION['usuario'] = "Victor";
$_SESSION['id'] = 1;

echo "Sesión iniciada para: " . $_SESSION['usuario'];

?>

<br>
<a href="40_perfil.php">Ir al perfil</a>