<?php

$nombreUsuario = "Juan";
$edadUsuario = 25;
$precioProducto = 19.99;
$esVip = true;

echo "<h1>Variables en PHP</h1>";

echo "Nombre: " . $nombreUsuario . "<br>";
echo "Edad: " . $edadUsuario . " años<br>";
echo "Precio: $" . $precioProducto . "<br>";
echo "¿Es VIP?: " . ($esVip ? 'Sí' : 'No') . "<br>";

echo "<p>El tipo de \$nombreUsuario es: " . gettype($nombreUsuario) . "</p>";
echo "<p>El tipo de \$edadUsuario es: " . gettype($edadUsuario) . "</p>";
