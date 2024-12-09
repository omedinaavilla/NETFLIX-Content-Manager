<?php
include('conexion.php');

// Recuperar el ID del registro a editar
$id = $_GET['id'];

// Consulta SQL para obtener los datos actuales del contenido
$query = "SELECT * FROM contenido WHERE id = $id";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>

<form method="POST" action="update_content.php?id=<?php echo $id; ?>">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="<?= $row['titulo'] ?>" required><br><br>

    <label for="genero">Género:</label>
    <input type="text" name="tipo_contenido" value="<?= $row['tipo_contenido'] ?>" required><br><br>

    <label for="año">Año:</label>
    <input type="text" name="año" value="<?= $row['año'] ?>" required><br><br>

    <label for="clasificacion">Clasificación:</label>
    <input type="text" name="clasificacion" value="<?= $row['clasificacion'] ?>" required><br><br>

    <label for="duracion">Duración:</label>
    <input type="text" name="duracion" value="<?= $row['duracion'] ?>" required><br><br>

    <label for="pais_produccion">País de Producción:</label>
    <input type="text" name="pais_produccion" value="<?= $row['pais_produccion'] ?>" required><br><br>

    <button type="submit">Actualizar</button>
</form>

<?php
$conn->close();
?>