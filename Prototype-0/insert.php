<?php 
    if ( !empty($_POST)) { 
        // post values
        $fname  = $_POST['fname'];
        $lname  = $_POST['lname'];
        $age    = $_POST['age'];
        $gender = $_POST['gender'];
		$person = array($fname, $lname, $age, $gender); 
      
		$file = file_get_contents('people.json');
		$data = json_decode($file, true);
		// unset($_POST["add"]);
		// $data["records"] = array_values($data["records"]);
		array_push($data, $person);
		file_put_contents("people.json", json_encode($data));
		header("Location: index.php");

    }
?>
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
				<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required" id="inputGender" name="gender" >
						<option>Please Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
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
