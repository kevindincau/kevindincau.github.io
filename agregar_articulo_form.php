<!-- agregar_articulo_form.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheTimeWorld - Agregar Artículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><a href="index.php">The Time World</a></h1>
        <!-- Otras partes del encabezado, si es necesario -->
    </header>

    <section class="main-content">
        <form action="agregar_articulo.php" method="post">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="contenido">Contenido:</label>
            <textarea id="contenido" name="contenido" required></textarea>

            <input type="submit" value="Agregar Artículo">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 TuPortalDeNoticias - Todos los derechos reservados.</p>
    </footer>
</body>
</html>