<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];

    // Evitar inyecciones SQL utilizando sentencias preparadas
    $stmt = $conn->prepare("INSERT INTO articulos (titulo, contenido, fecha) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $titulo, $contenido);
    
    if ($stmt->execute()) {
        // Redirigir a index.php después de agregar el artículo
        header("Location: index.php");
        exit();
    } else {
        echo "Error al agregar el artículo: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

