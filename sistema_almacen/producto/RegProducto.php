<?php
require_once "../conexion.php";

$descProducto= $_POST ["descProducto"];
$catProducto= $_POST ["catProducto"];
$preProducto= $_POST ["preProducto"];
$marca= $_POST ["marca"];
$proveedor= $_POST ["proveedor"];
$imgProducto=$_FILES["imgProducto"];

//var_dump($imgProducto);
$nameImagen=$imgProducto["name"];
$tmpImagen=$imgProducto["tmp_name"];

move_uploaded_file($tmpImagen, 
"../assest/img/producto/".$nameImagen);

mysqli_query($conectador, "insert into producto(descripcion, categoria, precio, marca,
 proveedor, imagen_pro) values('$descProducto', '$catProducto', '$preProducto', '$marca', 
 '$proveedor', '$nameImagen')");

 mysqli_close($conectador);
 header("Location:../MenuProducto.php");

?>