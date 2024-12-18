<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="agregar_producto.css">
</head>
<body>
    <form action="agregar_producto.php" method="post">
        <fieldset>
            <label for="producto">Nombre:</label>
            <input type="text" name="producto" id="producto" required><br>
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" required><br>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" step="0.01" required><br>
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" required><br>
            <label for="text">Materiales:</label>
            <input type="text" name="materiales" id="materiales" required><br>
            <input type="submit" value="Agregar Producto"> <a href="tabla_producto.php"> Volver</a>
        </fieldset>
    </form>
    <?php
    
        $nombre = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];
        $materiales = $_POST['materiales'];
        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "tp_integrador");
        $query = "INSERT INTO productos (nombre, descripcion, precio, cantidad, materiales) VALUES ('$nombre', '$descripcion', '$precio', '$cantidad', '$materiales')";
        $result = mysqli_query($conexion, $query);
        mysqli_close($conexion);
        header("Location: tabla_producto.php");

    ?>
</body>
</html>