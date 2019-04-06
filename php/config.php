<?php
function connect(){
$server='localhost';
$base='isg';
$username='root';
$pass="";
try {
    //code...
    $con=new PDO("mysql:host=$server;dbname=$base",$username,$pass);

    return $con;
} catch (PDOException $e) {
    //traitement en cas d'exeception;
    die("erreur : ".$e->getMessage());
}

}


?>