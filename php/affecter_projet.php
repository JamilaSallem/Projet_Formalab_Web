<?php
include "config.php";

$base=connect();

$req="SELECT title FROM projet";
$result=$base->query($req);

?>
<h2 class="text-primary">Projects</h2>
<table>
    <thead>
        <tr>
            <th><B class="text-success">Title</B></th>
        </tr>
    </thead>
</table>
<tbody>
    <?php
    while($projet=$result->fetchObject()){
    ?>
    <tr>
        <td><?php echo $projet->title; ?></td>
    </tr>
    <?php
    }
    ?>

<?php
$req="SELECT name,lastname FROM employe";
$result=$base->query($req);
?>

<h2 class="text-primary">Employees</h2>
<table>
    <thead>
        <tr>
            <th><B class="text-success">Name</B></th>
            <th><B class="text-success">Lastname</B></th>
        </tr>
    </thead>
</table>
<tbody>
    <?php
    while($emp=$result->fetchObject()){
    ?>
    <tr>
        <td><?php echo $emp->name; ?></td>
        <td><?php echo $emp->lastname; ?></td>
    </tr>
    <?php
    }
    ?>
<?php
$idEmp=$_REQUEST['idemp'];
$idProj=$_REQUEST['idproj'];

?>