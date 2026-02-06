<?php

echo "<h3>Bucle While</h3>";
$i = 1;
while ($i <= 5) {
    echo "Número: $i <br>";
    $i++;
}

echo "<h3>Bucle For</h3>";
for ($j = 1; $j <= 5; $j++) {
    echo "Iteración: $j <br>";
}

echo "<h3>Bucle Foreach (Para arreglos)</h3>";
$nombres = ["Ana", "Beto", "Carlos"];
foreach ($nombres as $nombre) {
    echo "Hola, $nombre <br>";
}
