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
    <title>Inventario de carros -- Compras</title>
</head>
<script src="js/vue.js"></script>
<body>
    <?php include "menu.php"; ?>

    <div class="container">
        <div id="main">
            <form action="">
                <label for="">Buscar por</label>
                <input type="search" name="" id="" placeholder="Marca">
                <input type="search" name="" id="" placeholder="Modelo">
                <input type="search" name="" id="" placeholder="Precio">
                <input type="search" name="" id="" placeholder="Fecha"><br><br>
                <input type="button" value="Buscar" class="Buscar">
                <input type="button" value="Añadir" class="Agregar" v-on:click="activar()">
            </form>
            <br><br><br><br>
            <table>
                <tr>
                    <th v-for="TV in Tcompras">{{TV}}</th>
                </tr>
                <?php 
                include "conexion.php";

                $mostrar="SELECT * FROM compras";
                $query=mysqli_query($conexion,$mostrar);
                while ($row=mysqli_fetch_array($query)) {
                ?>
                <tr class="Info1">
                    <td><?php echo $row[0];?></td>&nbsp;&nbsp;<td><?php echo $row[1];?></td>&nbsp;&nbsp;<td><?php echo $row[2];?></td>&nbsp;&nbsp;<td><?php echo $row[3];?></td>&nbsp;&nbsp;<td><?php echo $row[4];?></td>&nbsp;&nbsp;<td><?php echo $row[5];?></td><td><?php echo $row[6];?></td><td><a href="modificarCompras.php?Id=<?php echo $row[0];?>"><input type="button" value="Modificar"></a></td><td><a href="eliminarCompras.php?Id=<?php echo $row[0];?>"><input type="button" value="Eliminar"></a></td>
                </tr>
                <?php } ?>
                </tr>
            </table>
        </div>
        
            <div class="modal" id="modalV">
                    <fieldset v-show="mostrar==true" v-bind:class="clase">
                        <button @click="desactivar()">X</button>
                    <center>
                        <h2>Añadir Compra</h2>
                    <form action="registro_compras.php" method="POST">
                            <input type="text" name="marca" id="marca" placeholder="Marca">
                            <input type="text" name="modelo" id="modelo" placeholder="Modelo">
                            <input type="text" name="color" id="color" placeholder="Color">
                            <input type="text" name="placas" id="placas" placeholder="Placas">
                            <input type="number" name="precio" id="precio" placeholder="Precio">
                            <input type="date" name="fecha_compra" id="fecha_compra">
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