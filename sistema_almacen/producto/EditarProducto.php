<?php

require_once "../conexion.php";
$id=$_GET["id"];
$descProducto= $_POST ["descProducto"];
$catProducto= $_POST ["catProducto"];
$preProducto= $_POST ["preProducto"];
$marca= $_POST ["marca"];
$proveedor= $_POST ["proveedor"];
mysqli_query($conectador,"Update producto set descripcion='$descProducto', categoria='$catProducto',
 precio='$preProducto',marca='$marca', proveedor='$proveedor' where id_producto=$id");

 mysqli_close($conectador);
 header("Location: ListarProducto.php");

?>


