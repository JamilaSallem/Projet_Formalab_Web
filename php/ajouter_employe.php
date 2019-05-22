<?php
include "config.php";

$base=connect();

$name=$_REQUEST['Name'];
$lastname=$_REQUEST['Lastname'];
$username=$_REQUEST['Username'];
$password=$_REQUEST['Mdp'];



$req="INSERT INTO employe (id,name,lastname,username,password) VALUES(null,'$name','$lastname','$username','$password')";

$resp=$base->exec($req);

if ($resp==1){
    echo "Employé inséré avec succès";
}
else{
    echo "Vérifier la requete ou le fichier config";
}

?>