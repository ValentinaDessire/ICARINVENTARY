<?php 
include "conexion.php";

$cedula= $_POST['identificacion'];
$name= $_POST['name'];
$apellido= $_POST['ape'];
$tel= $_POST['tel'];
$carro_comprado= $_POST['carro'];
$modelo= $_POST['modelo'];
$marca= $_POST['marca'];
$fecha_compra= $_POST['fecha_compra'];

$insertar= "INSERT INTO cliente(cedula, nombre, apellido, telefono, carro_comprado, modelo, marca, fecha_compra) VALUES ('$cedula','$name','$apellido','$tel','$carro_comprado','$modelo','$marca','$fecha_compra')";

$consul= mysqli_query($conexion,$insertar);

if($consul==true){
    header("Location: Clientes.php");
}


?>