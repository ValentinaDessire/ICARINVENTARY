<?php 

include "conexion.php";

$Id=$_POST['Id'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$color=$_POST['color'];
$placas=$_POST['placas'];
$precio=$_POST['precio'];

$modificar="UPDATE vehiculos SET Id='$Id',marca='$marca',modelo='$modelo',color='$color',placa='$placas',precio='$precio' WHERE Id='$Id'";

$query=mysqli_query($conexion,$modificar);

if ($query) {
    header("Location: Carros.php");
}

?>