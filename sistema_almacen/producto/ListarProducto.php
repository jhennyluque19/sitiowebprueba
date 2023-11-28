<?php
include "../header.php";
?>

<table class="table">
  <thead>
    <th>Descripcion</th>
    <th>Categoria</th>
    <th>Precio</th>
    <th>Marca</th>
    <th>Proveedor</th>
    <td></td>
    <td></td>
  </thead>
  <tbody>
    <?php
    $producto_sql=mysqli_query($conectador,"SELECT * FROM producto");
    while($producto=mysqli_fetch_array($producto_sql)){
        ?>
        <tr>
            <td><?php echo $producto[1]; ?></td>
            <td><?php echo $producto[2]; ?></td>
            <td><?php echo $producto[3]; ?></td>
            <td><?php echo $producto[4]; ?></td>
            <td><?php echo $producto[5]; ?></td>
            <td><img src="../assest/img/imgProducto/<?php echo $producto[6]; ?>" alt="" width="100"></td>
            <td>
                <button><a href="FEditarProducto.php? id=<?php echo $producto[0]?>">Editar</a></button>
                <button><a href="EliminarProducto.php? id=<?php echo $producto[0]?>">Eliminar</a></button>
            </td>
        </tr>
    <?php
    }
?>
  </tbody>
</table>

<?php
include "../footer.php"
?>