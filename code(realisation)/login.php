<?php


if(isset($_POST['username'] and isset($_POST['password']))){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( $_POST['username'] = 'admin' && $_POST['password'] = 'admin'){

        header('location:index.php');
    }
   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
</head>
<body>
    <main clas>
        <section>
            <form method="post">
                <input type="text" name="admin">
                <input type="password" name="admin">
                <input type="submit" value="log in" name="input">
            
            </form>
        </section>
    </main>
</body>
</html>