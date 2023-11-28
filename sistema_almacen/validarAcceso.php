<?php

//echo "hola desde el archivo validar acceso";
//recuperar la informacion con post
require_once "conexion.php";

//recuperando datos de index.php
$usuario= $_POST["nomUsuario"];

$password= $_POST["passUsuario"];

//consultar a la base de datos

$acceso_sql=mysqli_query($conectador, "SELECT * FROM usuario WHERE login_usuario='$usuario' and password='$password'");

$acceso=mysqli_fetch_row($acceso_sql);//extraer valores
//var_dump($acceso);
if($acceso!=null)
{
    //echo "acceso correcto";
    //panel principal otro archivo //que se localize
    header("location:panel_principal.php");
}
else
{
   // echo "error acceso";
   include "index.php";
   echo "<p class='error-acceso'> Error de acceso, intentelo de nuevo!!!!!</p>";
}

?>