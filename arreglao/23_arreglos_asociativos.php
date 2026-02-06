<?php

$persona = [
    "nombre" => "Victor",
    "apellido" => "Arana",
    "edad" => 30,
    "curso" => "PHP desde cero"
];

echo "Nombre: " . $persona['nombre'] . "<br>";
echo "Curso: " . $persona['curso'] . "<br>";

echo "<h3>Recorriendo arreglo asociativo:</h3>";
foreach ($persona as $clave => $valor) {
    echo "<strong>$clave:</strong> $valor <br>";
}
