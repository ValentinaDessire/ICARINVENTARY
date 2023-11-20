<?php 
include("conexion.php");

$name1= $_POST['name1'];
$user1= $_POST['user1'];
$pass1= $_POST['pass1'];

$INSERT= "INSERT INTO registro(nombre, usuario, contrasena) VALUES ('$name1','$user1','$pass1')";

$consulta= mysqli_query($conexion,$INSERT);

if($consulta==true){
    header("Location: index.php");
}else{
    echo "Error";
}

?>