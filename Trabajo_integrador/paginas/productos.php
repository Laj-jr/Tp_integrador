<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Construcción en Acero</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>Tecmeland</h1>
        </div>
        <nav class="navbar">
            <a href="../index.html">Inicio</a>
            <a href="productos.php">Productos</a>
            <a href="login.html">Iniciar Sesion</a>
        </nav>
    </header>

    <main>
        <section class="productos">
            <h2>Nuestros Productos</h2>
            <div class="productos-grid">
                <?php
                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "tp_integrador");
                    $query = "SELECT * FROM productos";
                    $result = mysqli_query($conexion, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div class="producto">
                        <h3>'.$row['nombre'].'</h3>
                        <p>'.$row['descripcion'].'</p>
                        <p>Materiales: '.$row['materiales'].'</p>
                        <p>Precio: $'.$row['precio'].'</p>
                        <button>Comprar</button>
                    </div>';
                    }
                    mysqli_close($conexion);
                ?>
            </div>
        </section>
    </main>
</body>
</html>
