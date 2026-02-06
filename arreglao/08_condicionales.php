<?php

$numero = 15;
$usuario = "Admin";
$password = "12345";

echo "<h1>Condicionales</h1>";

if ($numero > 10) {
    echo "<p>El número $numero es mayor que 10.</p>";
} else {
    echo "<p>El número $numero no es mayor que 10.</p>";
}

if (isset($usuario) && !empty($usuario)) {
    echo "<p>El usuario '$usuario' está listo para el login.</p>";
}

$inputUser = "Admin";
$inputPass = "12345";

if ($inputUser == "Admin" && $inputPass == "12345") {
    echo "<div style='color: green; font-weight: bold;'>¡Acceso concedido! Bienvenido, $inputUser.</div>";
} else {
    echo "<div style='color: red;'>Acceso denegado.</div>";
}
