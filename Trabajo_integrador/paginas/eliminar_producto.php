<?php

 if(isset($_GET['id'])) {
    $id_producto = $_GET['id'];
    if (!empty($id_producto)) {
        echo "todo salio correctamente";
        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "tp_integrador");
        $query = "DELETE FROM productos WHERE id =".$id_producto;
        $result = mysqli_query($conexion, $query);
        mysqli_close($conexion);

        if ($result === true) {
            header("Location: tabla_producto.php");
        }
        else{
            echo "Hubo un error al eliminar el producto";
        }
        
    }
    else{
        echo "Hubo un error al eliminar el producto";
    }
 }
 else{
    echo "Hubo un error al eliminar el producto";
 }

?>