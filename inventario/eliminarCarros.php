<?php 

include "conexion.php";

$_Id=$_GET['Id'];

$eliminar="DELETE FROM vehiculos WHERE Id='$_Id'";

$query=mysqli_query($conexion,$eliminar);

?>