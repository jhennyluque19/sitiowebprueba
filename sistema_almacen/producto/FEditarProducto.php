<?php
include "../header.php";

require_once "../conexion.php";
$id=$_GET["id"];

$producto_sql=mysqli_query($conectador, "select * from producto where id_producto=$id");

$producto=mysqli_fetch_row($producto_sql);

?>

<form action="EditarProducto.php? id=<?php echo $id;?>" method="POST" class="formulario" enctype="multipart/form-data">
  <div class="row">  
    <div class="col-50">
      <label for="">Descripcion</label>
      <input type="text" class="form-control" name="descProducto" value="<?php echo $producto [1]; ?>">
      <label for="">Categoria</label>
      <input type="text" class="form-control" name="catProducto" value="<?php echo $producto [2]; ?>">
      <label for="">Precio</label>
      <input type="text" class="form-control" name="preProducto" value="<?php echo $producto [3]; ?>">
    </div>
    <div class="col-50">
      <label for="">Marca</label>
      <input type="text" class="form-control" name="marca" value="<?php echo $producto [4]; ?>">
      <label for="">Proveedor</label>
      <input type="text" class="form-control" name="proveedor" value="<?php echo $producto [5]; ?>">
      
    </div>
</div>
<div class="row"> 
    <div class="col-50">
    <input type="button" class="cancelar" value="Cancelar">
    </div>
    <div class="col-50">
      <input type="submit" class="form-control" value="Guardar"> 
    </div>
</div>

  </form>

  <?php
    include "../footer.php"
?>
  
