<?php
    include 'config.php';

    $sqlGetData = 'SELECT id, fname, lname, age  FROM people';
    $result = mysqli_query($conn ,$sqlGetData);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<body>
    <div>
        <a href="insert.php">Insert Data</a>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Action</th>
            </tr>

            <?php
                    foreach($data as $person){
            ?>

            <tr>
                <td><?= $person['fname']?></td>
                <td><?= $person['lname']?></td>
                <td><?= $person['age']?></td>
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