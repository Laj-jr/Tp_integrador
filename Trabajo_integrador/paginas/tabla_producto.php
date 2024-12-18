<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Productos</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
<HEAder>
  <div class="container">
    <h2 class="text-center mb-4">Gestión de Productos</h2>
    <div class="table-responsive">
      <a href="agregar_producto.php">Agregar Producto</a>
      <table class="table table-bordered table-striped" id="productosTable">
        <thead class="table-dark">
          <tr>
            <th>Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "tp_integrador");
            $query = "SELECT * FROM productos";
            $result = mysqli_query($conexion, $query);
            while ($row = mysqli_fetch_array($result)) {
              echo '<tr>
                      <td>'.$row['nombre'].'</td>
                      <td>'.$row['descripcion'].'</td>
                      <td>'.$row['precio'].'</td>
                      <td>'.$row['cantidad'].'</td>
                      <td>
                        <a href="editar_producto.php?id" class="btn btn-primary">Editar</a>
                        <a href="eliminar_producto.php?id='.$row['id'].'" class="btn btn-danger">Eliminar</a>
                      </td>
                    </tr>';
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</HEAder>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb3d7Fv7vv7A2vwBwrChrxP7De7zF8vYlWb5Qfw9iXH8q/3dR6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0bTp9JX9FksA2A98J5aF1J6u59fw92gGgqrxhbZXtv2dYuwK" crossorigin="anonymous"></script>
  <script src="edicion.JS"></script>
</body>
</html>
