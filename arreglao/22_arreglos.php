<?php

echo "<h1>Arreglos Indexados</h1>";

$frutas = ["Manzana", "Pera", "Uva", "Sandía"];
$colores = array("Azul", "Verde", "Rojo");

echo "<pre>";
var_dump($frutas);
echo "</pre>";

$frutas[] = "Fresa";
$frutas[1] = "Mango";

echo "<ul>";
foreach ($frutas as $indice => $fruta) {
    echo "<li>$indice: $fruta</li>";
}
echo "</ul>";

echo "<p>Color 0: $colores[0]</p>";
