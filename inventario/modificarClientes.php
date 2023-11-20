<?php 
session_start();
if (!isset($_SESSION['user'])) {
    echo "No puedes ingresar";
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
    <title>Invetario de vehiculos -- Modificar</title>
</head>
<body>
<div class="container">
        <div class="titulo-nota">
            <h1>Bienvenido a sistema de carros</h1>
            <a href="session_destroy.php"><img src="img/power.png" alt="" width="30" height="30"></a>
        </div>
        <div class="lista-opciones">
            <div class="perfil">
             <img src="img/user.png" alt="" width="70" height="70"><br><br>
             <h3>Nombre</h3><br>
            </div>
            <div class="lista">
                    <a href="index-2.php"><button><img src="" alt=""> Panel de control</button></a><br><br><br>
                    <a href="Clientes.php"><button><img src="img/customer.png" alt="" width="30" height="30">&nbsp;&nbsp;&nbsp;Clientes</button></a> <br><br><br>
                    <a href="Vendedores.php"><button><img src="img/tr.png" alt=""  width="30" height="30">&nbsp;&nbsp;&nbsp; Vendedores</button></a><br><br><br>
                    <a href="Carros.php"><button><img src="img/car.png" alt=""  width="30" height="30">&nbsp;&nbsp;&nbsp;Carros</button></a> <br><br><br>
                    <a href="Compras.php"><button><img src="img/money.png" alt=""  width="30" height="30">&nbsp;&nbsp;&nbsp;Compras</button></a> <br><br><br>
                    <a href="Ventas.php"><button><img src="img/sale.png" alt=""  width="30" height="30">&nbsp;&nbsp;&nbsp;Ventas</button></a>
            </div>
        </div>
    </div>
    <?php 
     include "conexion.php";
     $_Id=$_GET['Id'];
        $mostrar= "SELECT * FROM cliente WHERE Id='$_Id'";
        $query=mysqli_query($conexion,$mostrar);
        while ($row=mysqli_fetch_array($query)) {
    ?>
    <center><h1>Modificar</h1></center>
    <form action="modificar_DatoClientes.php" method="post">
    <input type="text" name="Id" id="" value="<?php echo $row[0];?>"><br><br>
    <label for="">Cedula</label>
    <input type="text" name="cedula" id="" value="<?php echo $row[1];?>"><br><br>
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="" value="<?php echo $row[2];?>"><br><br>
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="" value="<?php echo $row[3];?>"><br><br>
    <label for="">Telefono</label>
    <input type="text" name="numero" id="" value="<?php echo $row[4];?>"><br><br>
    <label for="">Vehiculo Comprado</label>
    <input type="text" name="compra" id="" value="<?php echo $row[5];?>"><br><br>
    <label for="">Modelo</label>
    <input type="text" name="modelo" id="" value="<?php echo $row[6];?>"><br><br>
    <label for="">Marca</label>
    <input type="text" name="marca" id="" value="<?php echo $row[7];?>"><br><br>
    <label for="">Fecha de compra</label>
    <input type="text" name="fecha_compra" id="" value="<?php echo $row[8];?>">
    <br><br>
    <input type="submit" value="Modificar">
    </form>
        <?php } ?>
</body>
</html>