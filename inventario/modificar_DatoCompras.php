<?php 

include "conexion.php";

$Id=$_POST['Id'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$precio=$_POST['precio'];
$fecha_compra=$_POST['fecha_compra'];

$modificar="UPDATE compras SET Id='$Id',marca='$marca',modelo='$modelo',color='$color',placas='$placas',precio='$precio',fecha_compra='$fecha_compra' WHERE Id='$Id'";

if (mysqli_query($conexion,$modificar)) {
    header("Location: Compras.php");
}






?>