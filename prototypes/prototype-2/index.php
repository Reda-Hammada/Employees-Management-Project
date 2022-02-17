<?php
    include 'config.php';

    $sqlGetData = 'SELECT id, first_name, last_name, age, gender FROM employees';
    $result = mysqli_query($conn ,$sqlGetData);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <a href="insert.php">Insert Data</a>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>

            <?php
                    foreach($data as $person){
            ?>

            <tr>
                <td><?= $person['first_name']?></td>
                <td><?= $person['last_name']?></td>
                <td><?= $person['age']?></td>
                <td><?= $person['gender']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $person['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $person['id'] ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>