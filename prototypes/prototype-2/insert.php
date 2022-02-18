<?php

    include 'config.php';
    if(!empty($_POST)){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];

        // sql insert query
        $sqlInsertQuery = "INSERT INTO people(fname, lname, age) 
                                VALUES('$firstName', '$lastName', '$age')";
        
        mysqli_query($conn, $sqlInsertQuery);
     
        header("Location: index.php");

    }
?>

<body>
<div>
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
			<div>
				<label for="inputFName">First Name</label>
				<input type="text" required="required" id="inputFName" name="fname" placeholder="First Name">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Last Name</label>
				<input type="text" required="required" id="inputLName" name="lname" placeholder="Last Name">
        		<span></span>
			</div>
			
			<div>
				<label for="inputAge">Age</label>
				<input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
				<span></span>
			</div>
		
    
			<div class="form-actions">
					<button type="submit">Create</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>