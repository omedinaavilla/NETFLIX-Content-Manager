<?php
include('conexion.php');

// Recuperar el ID del registro a actualizar
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $genero = $_POST['tipo_contenido'];
    $año = $_POST['año'];
    $clasificacion = $_POST['clasificacion'];
    $duracion = $_POST['duracion'];
    $pais_produccion = $_POST['pais_produccion'];

    // Consulta SQL para actualizar los datos
    $stmt = $conn->prepare("UPDATE contenido SET titulo = ?, genero = ?, año = ?, clasificacion = ?, duracion = ?, pais_produccion = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $titulo, $genero, $año, $clasificacion, $duracion, $pais_produccion, $id);

    if ($stmt->execute()) {
        echo "Registro actualizado exitosamente.";
        echo '<br><br><a href="index.php"><button>Regresar a la tabla</button></a>';
    } else {
        echo "Error: " . $stmt->error;
    }
    
   
    $stmt->close();
    $conn->close();
}
?>