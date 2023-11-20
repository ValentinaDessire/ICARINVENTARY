<?php 
include "conexion.php";

$cedula= $_POST['identificacion'];
$name= $_POST['name'];
$apellido= $_POST['ape'];
$tel= $_POST['tel'];
$carro_vendido= $_POST['carro'];
$modelo= $_POST['modelo'];
$marca= $_POST['marca'];
$fecha_venta= $_POST['fecha_venta'];

$insertar= "INSERT INTO vendedores(cedula, nombre, apellido, telefono, carro_vendido, modelo, marca, fecha_venta) VALUES ('$cedula','$name','$apellido','$tel','$carro_vendido','$modelo','$marca','$fecha_venta')";

$consul= mysqli_query($conexion,$insertar);

if($consul==true){
    header("Location: Vendedores.php");
}


?>