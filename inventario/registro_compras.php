<?php 

include "conexion.php";

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$precio=$_POST['precio'];
$fecha_compra=$_POST['fecha_compra'];

$insertar="INSERT INTO compras(marca, modelo, color, placas, precio, fecha_compra) VALUES ('$marca','$modelo','$color','$precio','$placas','$fecha_compra')";

$query=mysqli_query($conexion,$insertar);

if ($query==true) {
    header("Location: Compras.php");
}






?>