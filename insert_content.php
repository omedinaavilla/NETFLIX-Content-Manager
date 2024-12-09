<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $genero = $_POST['tipo_contenido'];
    $anio = $_POST['año'];
    $clasificacion = $_POST['clasificacion'];
    $duracion = $_POST['duracion'];
    $pais_produccion = $_POST['pais_produccion'];

    // Consulta preparada para evitar inyecciones SQL
    $stmt = $conn->prepare("INSERT INTO contenido (titulo, genero, anio, clasificacion, duracion, pais_produccion) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $titulo, $genero, $anio, $clasificacion, $duracion, $pais_produccion);

    if ($stmt->execute()) {
        echo "Nuevo contenido agregado exitosamente.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>