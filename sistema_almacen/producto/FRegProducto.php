<?php
include "../header.php";
?>

<form action="RegProducto.php" method="POST" class="formulario row" enctype="multipart/form-data">
    <div class="col-50">
      <label for="">Descripcion</label>
      <input type="text" class="form-control" name="descProducto">
      <label for="">Categoria</label>
      <input type="text" class="form-control" name="catProducto">
      <label for="">Precio</label>
      <input type="text" class="form-control" name="preProducto">
      <input type="button" class="cancelar" value="Cancelar">
    </div>
    <div class="col-50">
      <label for="">Marca</label>
      <input type="text" class="form-control" name="marca">
      <label for="">Proveedor</label>
      <input type="text" class="form-control" name="proveedor">
      <label for="">Imagen</label>
      <input type="file" class="form-control" name="imgProducto">
      <input type="submit" class="form-control" value="Guardar">
    </div>
  </form>

  <?php
    include "../footer.php"
?>
  
