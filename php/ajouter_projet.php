<?php
include "config.php";

$base=connect();

$titre=$_REQUEST['title'];

$req="INSERT INTO projet (idProj,title) VALUES(null,'$titre')";

$resp=$base->exec($req);

if ($resp==1){
    echo "Projet inséré avec succès";
}
else{
    echo "Vérifier la requete ou le fichier config";
}

?>