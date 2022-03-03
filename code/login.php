<?php


if(isset($_POST['username'],$_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin'){

        header('location:index.php');
    
    }
    else{

        $erroMessage;
    }
  
        
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
        <section class='w-50 mt-5  ms-auto   me-auto   bg-white'>
            <div class="w-25 ms-auto me-auto">
                <img src="./img/logo.png" alt="logo" >
            </div>
            <form method="post">
                <input class='d-block border form-control mt-3 w-50 ms-auto me-auto rounded border-dark ' type="text" name="username">
                <input class= 'd-block border form-control mt-2 w-50  ms-auto me-auto rounded border-dark ' type="password" name="password">
                <input class='d-block ms-auto me-auto  mt-3 btn btn-success' type="submit" value="log in">
                <p class="text-danger text-center mt-3  mb-3" ></p>
            </form>
        </section>
    </main>
</body>
</html>