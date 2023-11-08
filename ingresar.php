<?php
require("conexion.php");

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

$insertar = "INSERT INTO estudiante VALUES ('$nombre', '$pass')";

$query = mysqli_query($conectar, $insertar);

if ($query){
    echo "se inserto corectamente";
}else{
    echo "no se inserto";
}


?>
