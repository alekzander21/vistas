<?php
require_once "./config/conexion.php";
require_once "./config/instancia.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="login.php" method="post">
        <h2>Ingresar al Simulacro</h2>
        <input type="text" name="usuario" placeholder="Ingrese su nroDoc">
        <input type="text" name="password" placeholder="Ingrese su password">
        <input type="submit" value="Enviar" name="enviar">
        <a href="./views/registro.php">¿No tienes un a cuente?Registrese ahora!</a>
        <a href="#">Olvide mi contraseña</a>
    </form>
</body>
<?php 
require "./model/login.model.php";
?>
</html>