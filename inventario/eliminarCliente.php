<?php

include "conexion.php";

$_Id=$_GET['Id'];

$eliminar="DELETE FROM cliente WHERE Id='$_Id'";

$query=mysqli_query($conexion,$eliminar);

if ($query==true) {
    header("Location: Clientes.php");
}

?>

