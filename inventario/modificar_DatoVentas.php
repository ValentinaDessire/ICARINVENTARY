<?php 

include "conexion.php";

$Id=$_POST['Id'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$precio=$_POST['precio'];
$fecha_ventas=$_POST['fecha_ventas'];

$modificar="UPDATE ventas SET Id='$Id',marca='$marca',modelo='$modelo',color='$color',placas='$placas',precio='$precio',fecha_venta='$fecha_ventas' WHERE Id='$Id'";

if (mysqli_query($conexion,$modificar)) {
    header("Location: Ventas.php");
}






?>