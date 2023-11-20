<?php 

include "conexion.php";

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$precio=$_POST['precio'];
$fecha_venta=$_POST['fecha_venta'];

$insertar="INSERT INTO ventas(marca, modelo, color, placas, precio, fecha_compra) VALUES ('$marca','$modelo','$color','$precio','$placas','$fecha_venta')";

$query=mysqli_query($conexion,$insertar);

if ($query==true) {
    header("Location: Ventas.php");
}



?>