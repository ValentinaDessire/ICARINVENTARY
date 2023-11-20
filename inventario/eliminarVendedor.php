<?php 
include "conexion.php";

$_Id=$_GET['Id'];

$eliminar="DELETE FROM vendedores WHERE Id='$_Id'";

$query=mysqli_query($conexion,$eliminar);

if ($query==true) {
    header("Location: Vendedores.php");
}


?>