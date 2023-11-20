<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index-2.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Modificar</title>
</head>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/efectos.js"></script>
<body>
<?php include "menu.php";?>

<?php 
 include "conexion.php";
 $_ID=$_GET['Id'];
 $mostrar= "SELECT * FROM vendedores WHERE Id='$_ID'";
 $query=mysqli_query($conexion,$mostrar);
 while ($row=mysqli_fetch_array($query)) {
 ?>
<form action="modificar_DatoVendedores.php" method="post">
<input type="text" name="Id" id="" value="<?php echo $row[0];?>"><br><br>
<label for="">Cedula</label>
<input type="text" name="cedula" id="" value="<?php echo $row[1];?>"><br><br>
<label for="">Nombre</label>
<input type="text" name="nombre" id="" value="<?php echo $row[2];?>"><br><br>
<label for="">Apellido</label>
<input type="text" name="apellido" id="" value="<?php echo $row[3];?>"><br><br>
<label for="">Telefono</label>
<input type="text" name="numero" id="" value="<?php echo $row[4];?>"><br><br>
<label for="">Carro vendido</label>
<input type="text" name="venta" id="" value="<?php echo $row[5];?>"><br><br>
<label for="">Modelo</label>
<input type="text" name="modelo" id="" value="<?php echo $row[6];?>"><br><br>
<label for="">Marca</label>
<input type="text" name="marca" id="" value="<?php echo $row[7];?>"><br><br>
<label for="">Fecha de venta</label>
<input type="text" name="fecha_venta" id="" value="<?php echo $row[8];?>">
<br><br><br>
<input type="submit" value="Modificar">
</form>
 <?php } ?>

</body>
</html>