<?php
$conexion = mysqli_connect("127.0.0.1", "root", ""); // realizo la conexion

mysqli_select_db($conexion, "tienda"); //selecciono la base de datos

$id = $_GET['id']; // agrego las variables para el envio get

$consulta = "DELETE from ropa where id=$id";

mysqli_query($conexion, $consulta);

header("location:listar.php"); // despues que borre el elemento me redirige 