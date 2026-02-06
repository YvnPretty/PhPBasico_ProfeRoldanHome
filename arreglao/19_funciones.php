<?php

declare(strict_types=1);

function dividir(float $a, float $b): float
{
    if ($b == 0) {
        return 0.0;
    }
    return $a / $b;
}

echo "<h1>Funciones Tipadas</h1>";

$res = dividir(10.5, 2.5);
echo "<p>Resultado: $res</p>";

try {
    echo "<p>Dividiendo 20 / 4: " . dividir(20, 4) . "</p>";
} catch (TypeError $e) {
    echo "<p style='color: red;'>Error: " . $e->getMessage() . "</p>";
}
