<?php
class Conexion{
    function Conexion{
        $host ="localhost"
        $dbname= "prueba"
        $username="postgres"
        $password="root"
try{
    $conn= new PDO ("pgsql:host=$host; dbname=$dbname; $username, $password");
    echo "conexion correcta";
}catch(PDOException $exp){

    echo ("error", $exp);
}

return $conn;
    }

}

?>