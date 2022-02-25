<?php


if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( $username =='admin' && $password == 'admin'){

        header('location:index.php');
    }
   
    else{

        echo " username or password wrong";
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
                <input type="text" name="username">
                <input type="password" name="password">
                <input type="submit" value="log in">
            
            </form>
        </section>
    </main>
</body>
</html>