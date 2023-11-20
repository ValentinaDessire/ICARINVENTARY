<?php

include "conexion.php";

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$precio=$_POST['precio'];

$registro="INSERT INTO vehiculos(marca, modelo, color, placa, precio) VALUES ('$marca','$modelo','$color','$placas','$precio')";

$query=mysqli_query($conexion,$registro);

if ($query==true) {
    header("Location: Carros.php");
}


?>