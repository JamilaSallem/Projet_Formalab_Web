<?php
include "config.php";

$base=connect();

$req="SELECT * FROM projet";
$result=$base->query($req);

?>
<h2 class="text-primary">Assigned Projects</h2>
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

