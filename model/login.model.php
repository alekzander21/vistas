<?php

if($_POST){
    session_start();
    $u = $_POST['usuario'];
    $p = $_POST['password'];
    $comando -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $query = $comando->prepare("SELECT * FROM tb_clave_tarjeta WHERE codpersona= :u AND fab_pass = :p");
    $query->bindParam(":u",$u);
    $query->bindParam(":p",$p);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    $password = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario'] = $usuario['codpersona'];
        $_SESSION['password'] = $password['fab_pass'];
        header("Location: ./admin.php");
    }else{
        echo 'El usuario o contraseña es incorrecta';
    }
}
?>