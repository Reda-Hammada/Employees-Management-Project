<?php

session_start();

if(isset($_POST['username'], $_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    if( $username =='admin' && $password == 'admin'){
        $_SESSION['admin'] = $username;
        $_SESSION['password'] = $password;
        header('location:index.php');
    }
   
    else{

       $errorMessage;
    }
}

if(empty($_POST['username'],$_POST['passowrd'])){

    
}



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>log in</title>

</head>

<body class = 'bg-light w-100'>
    <main>
        <section class='w-50 ms-auto   me-auto  bg-white'>
            <img src="./img/logo.png" alt="logo">
            <form method="post border rounded rounded-3 w-25 ">
                <input class='d-block border rounded border-dark ' type="text" name="username">
                <input class= 'd-block border rounded border-dark ' type="password" name="password">
                <input class='d-block btn btn-success' type="submit" value="log in">
                <p class="text-danger" ><?php echo $errorMessage = "username or password is wrong ";  ?></p>
            </form>
        </section>
    </main>
</body>
</html>