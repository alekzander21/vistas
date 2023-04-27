<?php
class Conexion{
    public function conection(){
        $database = 'mysql:dbname=egrade6_BD_ACADEMIA2017;host=localhost';
        $usuario = 'root';
        $password = '';
        try{
            $conn = new PDO($database,$usuario,$password);
            //echo "Conexion Exitosa <br/>";
            return $conn;
        }catch(PDOException $ex){
            echo 'Fallo la conexion; ' .$ex->getMessage();
        }
    }
}
?>