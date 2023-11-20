<?php 

include "conexion.php";

$_Id=$_GET['Id'];

$eliminar="DELETE FROM ventas WHERE Id='$_Id'";

$query=mysqli_query($conexion,$eliminar);


?>