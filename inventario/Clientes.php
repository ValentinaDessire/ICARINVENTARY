<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index-2.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Inventario de carros -- Clientes</title>
</head>
<script src="js/vue.js"></script>
<body>
<div class="container">
    <?php include "menu.php";?>
        <div id="main">
            <form action="">
                <input type="search" name="" id="" placeholder="Buscar por Cedula, nombre, etc">
                <input type="button" value="Buscar">
                <input type="button" value="Añadir" class="Agregar" v-on:click="activar()">
            </form>
            <br><br><br><br>
            <table>
                <tr>
                    <th v-for="TC in Tclientes">{{TC}}</th>
                </tr>
                <?php 
                include "conexion.php";
                $mostrar= "SELECT * FROM cliente";
                $query=mysqli_query($conexion,$mostrar);
                while ($row=mysqli_fetch_array($query)) {
                ?>
                <tr class="Info1">
                    <td><?php echo $row[1];?></td>&nbsp;&nbsp;<td><?php echo $row[2];?></td>&nbsp;&nbsp;<td><?php echo $row[3];?></td>&nbsp;&nbsp;<td><?php echo $row[4];?></td>&nbsp;&nbsp;<td><?php echo $row[5];?></td>&nbsp;&nbsp;<td><?php echo $row[6];?></td>&nbsp;&nbsp;<td><?php echo $row[7];?></td>&nbsp;<td><?php echo $row[8];?></td><td><a href="modificarClientes.php?Id=<?php echo $row[0];?>"><input type="button" value="Modificar"></a></td><td><a href="eliminarCliente.php?Id=<?php echo $row[0];?>"><input type="button" value="Eliminar"></a></td>
                </tr>
                <?php }?>
            </table>
        </div>
        
        <div class="modal">
                <fieldset v-show="mostrar==true" v-bind:class="clase">
                    <button v-on:click="desactivar()">X</button>
                <center>
                    <h2>Añadir Clientes</h2>
                <form action="registro_clientes.php" method="POST">
                        <input type="text" name="identificacion" id="identificacion" placeholder="N° identificacion">
                        <input type="text" name="name" id="name" placeholder="Nombre">
                        <input type="text" name="ape" id="ape" placeholder="Apellido">
                        <input type="text" name="tel" id="tel" placeholder="Telefono">
                        <input type="text" name="carro" id="carro" placeholder="Carro comprado">
                        <input type="text" name="modelo" id="modelo" placeholder="Modelo">
                        <input type="text" name="marca" id="marca" placeholder="Marca">
                        <input type="date" name="fecha_compra" id="fecha_compra" placeholder="Fecha de compra"><br><br>
                        <center><input type="submit" value="Agregar" class="button"></center>
                </form>
                </center>
            </fieldset>
        </div>
</div>
<script src="js/tablas.js"></script>
</body>
</html>