<?php

$ajouterFicher = file_get_contents("personnes.json");
$data = json_decode($ajouterFicher);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <a href="insert.php">ajoute</a>    
    </div>
    <table>
    <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
<?php
foreach($data as $value){

?>
<tr>
    
    <td><?php echo $value[1] ?></td>
    <td><?php echo $value[2]?></td>
    <td><?php echo $value[3]?></td>
<td>

<a href="edit.php?id=<?php echo $value[0] ?>">modifier</a>
<a href="delete.php?id=<?php echo $value[0] ?>">supprime</a>
</td>
</tr>



<?php }?>
</table>














</body>
</html>