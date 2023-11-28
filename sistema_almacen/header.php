<?php
require_once "conexion.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Menu de navegacion</title>
    <link rel="stylesheet" href="<?php echo $base_url;?>assest/estilos/style.css">
  </head>
  <body>
  <header>
    <nav>
      <ul>
        <li><a href="">Inicio</a></li>
        <li><a href="<?php echo $base_url;?>MenuProducto.php">Productos</a></li>
        <li><a href="">Ventas</a></li>
        <li><a href="">Ingresos</a></li>
        <li><a href="">Personal</a></li>
      </ul>
    </nav>
  </header>