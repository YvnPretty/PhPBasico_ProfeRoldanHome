<?php

// Requerimos la conexión
include '50_pdo_conexion.php';

echo "<h3>Listado de Usuarios:</h3>";

try {
    // Consulta simple
    $stmt = $pdo->query("SELECT * FROM usuarios");

    while ($row = $stmt->fetch()) {
        echo $row['nombre'] . " - " . $row['email'] . "<br>";
    }

    // Consulta con parámetros (Preparada para evitar Inyección SQL)
    $id = 1;
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);
    $user = $stmt->fetch();

    if ($user) {
        echo "<h4>Usuario buscado por ID:</h4>";
        echo $user['nombre'];
    }
} catch (PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
