<?php
function connect()
{
    $server="localhost";
    $base="project_management";
    $username="root";
    $pass="";
    try{
        //code à exécuter..
        $con = new PDO("mysql:host=$server;dbname=$base",$username,$pass);

        return $con;
    }catch(PDOException $e)
    {
        //exeption..
        die("Erreur: ".$e->getMessage());
    }
}
?>