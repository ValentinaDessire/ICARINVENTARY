<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index-login.css">
    <title>Login</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <center>
        <div id="login" v-show="mostrar==false">
            <fieldset>
                <legend><img src="img/user.png" alt="" width="70" height="70"></legend>
                <form action="login.php" method="POST">
                    <input type="text" name="user" id="" placeholder="Usuario"><br><br>
                    <input type="password" name="pass" id="" placeholder="Contraseña"><br><br><br>
                    <input type="submit" value="Iniciar Sesion"><br><br><br>
                    <a href="#" class="registrate"><input type="button" value="Registrate" v-on:click="activar()"></a>
                </form>
            </fieldset>
        </div>
        <div id="registro" v-show="mostrar==true">
            <fieldset>
                <legend><img src="img/user.png" alt="" width="70" height="70"></legend>
                <form action="registro.php" method="post">
                    <input type="text" name="name1" id="" placeholder="Nombre"><br><br>
                    <input type="text" name="user1" id="" placeholder="Usuario"><br><br>
                    <input type="password" name="pass1" id="" placeholder="Contraseña"><br><br><br>
                    <input type="submit" value="Registro"><br><br><br>
                    <a href="#" id="Inicio" v-on:click="desactivar()"><input type="button" value="Inicia Sesion"></a>
                </form>
            </fieldset>
        </div>
    </center>
    </div>
    <script>
    new Vue({
        el:".container",
        data:{
            mostrar: false,
            clase:""
        },
        methods:{
            activar: function () {
                this.mostrar=true
            },

            desactivar: function () {
                this.mostrar=false
            }
        }
    });
    
    </script>
</body>
</html>