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
<body>
    <?php include "menu.php"; ?>
    <?php 
     include "conexion.php";
     $_Id=$_GET['Id'];
        $mostrar= "SELECT * FROM vehiculos WHERE Id='$_Id'";
        $query=mysqli_query($conexion,$mostrar);
        while ($row=mysqli_fetch_array($query)) {
    ?>
    <center>
    <h1>Modificar</h1>
    <form action="modificar_DatoCarros.php" method="post">
    <label for="">Numero</label>
    <input type="text" name="Id" id="" value="<?php echo $row[0];?>"><br><br>
    <label for="">Marca</label>
    <input type="text" name="marca" id="" value="<?php echo $row[1];?>"><br><br>
    <label for="">Modelo</label>
    <input type="text" name="modelo" id="" value="<?php echo $row[2];?>"><br><br>
    <label for="">Color</label>
    <input type="text" name="color" id="" value="<?php echo $row[3];?>"><br><br>
    <label for="">Placas</label>
    <input type="text" name="placas" id="" value="<?php echo $row[4];?>"><br><br>
    <label for="">Precio</label>
    <input type="text" name="precio" id="" value="<?php echo $row[5];?>">
    <br><br>
    <input type="submit" value="Modificar">
    </form>
    </center>
    <?php } ?>
</body>
</html>