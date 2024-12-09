<?php
include('conexion.php');  // Incluir el archivo de conexión a la base de datos

// Consulta SQL para obtener todos los registros de la tabla 'contenido'
$query = "SELECT * FROM contenido";
$result = $conn->query($query);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    echo "<h2>Netflix Movies and TV shows</h2>";
    // Estilo para la tabla
    echo "<style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
          </style>";

    // Crear una tabla para mostrar los resultados
    echo "<table>";
    echo "<tr><th>ID</th><th>Título</th><th>Género</th><th>Año</th><th>Clasificación</th><th>Duración</th><th>País de Producción</th></tr>";

    // Mostrar los resultados en las filas de la tabla
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['tipo_contenido'] . "</td>";
        echo "<td>" . $row['año'] . "</td>";
        echo "<td>" . $row['clasificacion'] . "</td>";
        echo "<td>" . $row['duracion'] . "</td>";
        echo "<td>" . $row['pais_produccion'] . "</td>";
        echo "<td>
            <a href='edit_content.php?id=" . $row['id'] . "'>Editar</a> | 
            <a href='delete_content.php?id=" . $row['id'] . "'>Eliminar</a>
          </td>";     
        echo "</tr>";
    }

    // Cerrar la tabla
    echo "</table>";
} else {
    echo "No hay registros en la tabla.";
}

// Cerrar la conexión
$conn->close();
?>