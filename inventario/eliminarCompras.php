<?php 

include "conexion.php";

$_Id=$_GET['Id'];

$eliminar="DELETE FROM compras WHERE Id='$_Id'";

$query=mysqli_query($conexion,$eliminar);




?>