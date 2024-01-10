<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Dincau</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/png">
</head>
<body>

    <header>
        <h1><a href="index.php">Grupo Dincau</a></h1>
        <div class="info-bar">
            <p id="date-time"></p>
        </div>
        <div class="menu">
        <nav>
            <ul>
                <li><a href="#">Mundial</a></li>
                <li><a href="#">Negocios</a></li>
                <li><a href="#">Arte</a></li>
                <li><a href="#">Estilo de Vida</a></li>
                <li><a href="#">Opiniones</a></li>
                <li><a href="#">Música</a></li>
                <li><a href="#">Juegos</a></li>
                <li><a href="#">Deportes</a></li>
            </ul>
        </nav>
        </div>
        <div class="ult-new">
            <nav>
                <ul>
                    <li><a href="#">noticia1</a></li>
                    <li><a href="#">noticia2</a></li>
                    <li><a href="#">noticia3</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="main-content">
        
        <?php include 'mostrar_articulos.php'; ?>
        
    </section>
    <footer>
        <p>&copy; 2024 Grupo Dincau - Todos los derechos reservados.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
