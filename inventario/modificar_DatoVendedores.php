<?php 
include "conexion.php";

$Id=$_POST['Id'];
$cedula=$_POST['cedula'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$num=$_POST['numero'];
$venta=$_POST['venta'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$fecha_venta=$_POST['fecha_venta'];

$modificar="UPDATE vendedores SET cedula='$cedula',nombre='$nom',apellido='$ape',telefono='$num',carro_vendido='$venta',modelo='$modelo',marca='$marca',fecha_venta='$fecha_venta' WHERE Id='$Id'";

$ejecutar=mysqli_query($conexion,$modificar);

if ($ejecutar) {
    header("Location: Vendedores.php");
}

?>