<?php
    include "config.php";

    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sqlDeleteQuery = "DELETE FROM people WHERE id= '$id'";

            mysqli_query($conn, $sqlDeleteQuery);
            header('Location: index.php');
            
        
    }
?>