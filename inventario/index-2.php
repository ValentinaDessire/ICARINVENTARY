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
    <title>Sistemas de inventarios iCar</title>
</head>
<script src="js/jquery-3.3.1.min.js"></script>
<body>
    <?php include "menu.php"; ?>

    <div class="container">
        <div id="main">
            <ul>
                <li>
                <section>
                <img src="img/customer.png" alt="Empleados" width="50" height="50" > <p>Empelados</p>
                </section>
                </li>
                <li>
                    <section>
                     <img src="img/employer.png" alt="Vendedores" width="50" height="50"><br><p>Vendedores</p>
                    </section>
                </li>
                <li>
                    <section><img src="img/car.png" alt="Vendedores" width="50" height="50"><p>Vehiculos</p></section>
                </li>
                <li>
                    <section><img src="img/money.png" alt="Vendedores" width="50" height="50"><p>Compras</p></section>
                </li>
                <li>
                    <section><img src="img/sale.png" alt="Vendedores" width="50" height="50"><p>Ventas</p></section>
                </li>
            </ul>

            <div class="titulo-bienvenida">
                <center><h2>Bienvenido Administrador</h2></center>
            </div>
            <div class="imagen-admin">
            <center><img src="img/user.png" alt="" width="150" height="150"></center>
            </div>
        </div>
    </div>
</body>
</html>