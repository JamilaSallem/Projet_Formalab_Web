<?php
include "config.php";

$base=connect();
$usernameAdmin='Ayoub';
$passwordAdmin='Ghozzi';

$username=$_REQUEST['Username'];
$password=$_REQUEST['Mdp'];

if($username==$usernameAdmin && $password==$password)
{echo file_get_contents("interface_admin.html");}
else{
    $req="SELECT id FROM employe WHERE username=$username AND password=$password";
}

$resp=$base->exec($req);

if ($resp==1){
    echo file_get_contents("consulter_projets.html");
}
else{
    echo "Verify username or password";
}

?>