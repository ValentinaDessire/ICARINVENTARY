<?php 
include "conexion.php";

$user=$_POST['user'];
$pass= $_POST['pass'];

$login= "SELECT * FROM registro WHERE usuario='$user' AND contrasena='$pass'";

$consulta= mysqli_query($conexion,$login);

$row= mysqli_fetch_row($consulta);

if ($row>0) {
    session_start();
    $_SESSION['user']="$user";
    header("Location: index-2.php");
    exit;
}

?>