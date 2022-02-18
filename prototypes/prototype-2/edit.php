<?php
include 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = 'SELECT id,fname,lname,age FROM people';
    $result = mysqli_query($conn ,$sqlGetData);
    $data = mysqli_fetch_assoc($result);

    for($i=0; $i<count($data); $i++){
        if($data[i][0] = $id){
              
            $newPerson =  $data;
        }
    }
}


if(!empty($_POST)){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];
        $update ="UPDATE people SET 
        fname='$firstName',lname='$lasName',age='$age'";
        header('location:index.php');
        mysqli_query($conn, $update);

}

?>


<form method="post">

    <input type ="text" name= "fname" value=<?php $newPerson[1] ?>>
    <input type="text" name="lname" value=<?php $newPerson[2] ?>>
    <input type="text" name="age" value=<?php $newPerson[3] ?>>

</form>