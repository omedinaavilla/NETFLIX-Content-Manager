<?php
include('conexion.php');

// Recuperar el ID del registro a eliminar
$id = $_GET['id'];

// Consulta SQL para eliminar el registro
$query = "DELETE FROM contenido WHERE id = $id";
if ($conn->query($query) === TRUE) {
    echo "Registro eliminado exitosamente.";
    echo '<br><br><a href="index.php"><button>Regresar a la tabla</button></a>';
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>