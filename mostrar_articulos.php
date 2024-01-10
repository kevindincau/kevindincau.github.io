<?php
include 'conexion.php';

$sql = "SELECT id, titulo, contenido, fecha FROM articulos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class=articulos>";
        echo "<h2>" . $row['titulo'] . "</h2>";
        echo "<h3>" . $row['contenido'] . "</h3>";
        echo "<h4>" . $row['fecha'] . "</h4>";
        echo "</div>";
    }
} else {
    echo "No hay artículos disponibles.";
}

$conn->close();
?>
