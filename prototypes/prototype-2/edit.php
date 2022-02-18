<?php
include 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = "SELECT id,fname,lname,age FROM people WHERE id = '$id'";
    $result = mysqli_query($conn ,$select);
    $data = mysqli_fetch_assoc($result);

    
}


if(!empty($_POST)){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];
        $update ="UPDATE people SET 
        fname='$firstName',lname ='$lastName',age='$age' WHERE id= $id";
        mysqli_query($conn, $update);
        header('location:index.php');

}

?>


<form method="post">

    <input type ="text" name= "fname" value=<?php echo $data['fname'] ?>>
    <input type="text" name="lname" value=<?php echo $data['lname'] ?>>
    <input type="text" name="age" value=<?php echo $data['age'] ?>>
    <input type="submit" value="edit">

</form>