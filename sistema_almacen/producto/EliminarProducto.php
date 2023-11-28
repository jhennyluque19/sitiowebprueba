<?php
require_once "../conexion.php";
$id=$_GET["id"];

mysqli_query($conectador, "delete from producto where id_producto=$id" );

mysqli_close($conectador);

header("Location:ListarProducto.php");


?>