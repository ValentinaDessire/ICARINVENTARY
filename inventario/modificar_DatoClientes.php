<?php 

include "conexion.php";

$Id=$_POST['Id'];
$cedula=$_POST['cedula'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$num=$_POST['numero'];
$compra=$_POST['compra'];
$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$fecha_compra=$_POST['fecha_compra'];

$modificar="UPDATE cliente SET cedula='$cedula',nombre='$nom',apellido='$ape',telefono='$num',carro_comprado='$compra',modelo='$modelo',marca='$marca',fecha_compra='$fecha_compra' WHERE Id='$Id'";

$ejecutar=mysqli_query($conexion,$modificar);

if ($ejecutar) {
    header("Location: Clientes.php");
}

?>