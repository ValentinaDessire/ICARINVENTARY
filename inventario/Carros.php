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
    <title>Inventario de carros -- Carros</title>
</head>
<script src="js/vue.js"></script>
<body>
<div class="container">
    <?php include "menu.php"; ?>
        <div id="main">
            <form action="">
                    <label for="">Buscar por</label>
                    <input type="search" name="" id="" placeholder="Marca">
                    <input type="search" name="" id="" placeholder="Modelo">
                    <input type="search" name="" id="" placeholder="Precio">
                    <input type="search" name="" id="" placeholder="Placa"><br><br>
                <input type="button" value="Buscar">
                <input type="button" value="Añadir" class="Agregar" v-on:click="activar()">
            </form>
            <br><br><br><br>
            <table>
                <tr>
                    <th v-for="TV in Tcarros">{{TV}}</th>
                </tr>
                <?php 
                include "conexion.php";

                $mostrar="SELECT * FROM vehiculos";
                $query=mysqli_query($conexion,$mostrar);
                while ($row=mysqli_fetch_array($query)) {
                ?>
                <tr class="Info1">
                    <td><?php echo $row[0];?></td>&nbsp;&nbsp;<td><?php echo $row[1];?></td>&nbsp;&nbsp;<td><?php echo $row[2];?></td>&nbsp;&nbsp;<td><?php echo $row[3];?></td>&nbsp;&nbsp;<td><?php echo $row[4];?></td>&nbsp;&nbsp;<td><?php echo $row[5];?></td><td><a href="modificarCarros.php?Id=<?php echo $row[0];?>"><input type="button" value="Modificar"></a></td><td><a href="eliminarCarros.php?Id=<?php echo $row[0];?>"><input type="button" value="Eliminar"></a></td>
                </tr>
                <?php } ?>
            </table>
        </div>

        <div class="modal" v-show="mostrar==true">
            <fieldset v-bind:class="clase">
                    <button v-on:click="desactivar()">X</button>
                <center>
                    <h2>Agregar Carros</h2>
                <form action="registro_vehiculos.php" method="post">
                    <input type="text" name="marca" id="" placeholder="Marca">
                    <input type="text" name="modelo" id="" placeholder="Modelo">
                    <input type="text" name="color" id="" placeholder="Color">
                    <input type="text" name="placas" id="" placeholder="Placas">
                    <input type="number" name="precio" id="" placeholder="Precio">
                    <br><br>
                    <center><input type="button" value="Agregar" class="button"></center>
                </form>
                </center>
            </fieldset>
            </div>
</div>
<script src="js/tablas.js"></script>
</body>
</html>