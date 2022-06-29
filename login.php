<?php
//Primero le doy un nombre a la variable, en este caso le di nombre user
$user= $_POST ["user"]; //Trae el dato que tenga en el input de nombre "user" del frontend
$pass= $_POST ["pass"];

$usuario="admin";
$contrasenia= "1234";

if ($usuario=="$user" && $contrasenia=="$pass") {
    header ("location: listar.php");
} else {
    header("location: error.html");
  }

   ?>