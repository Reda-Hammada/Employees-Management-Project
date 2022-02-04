
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
$getfile = file_get_contents('people.json');
$data = json_decode($getfile);
?>
<div class="container">
		<a href="insert.php"><i></i> Insert Data</a>
			<table>
				<tr>
					<th>No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Action</th>
				</tr>		
				<?php $index=0;foreach ($data as $person){
				$index++;  
				
				?>
				<tr>
					<td><?php echo $index; ?></td>
					<td><?php echo $person[0];?></td>
					<td><?php echo $person[1]; ?></td>
					<td><?php echo $person[2]; ?></td>
					<td><?php echo $person[3]; ?></td>
					<td>
						<a href="update.php?id=<?php echo $index; ?>">Edit</a>
						<a href="delete.php?id=<?php echo $index; ?>">Delete</a>
					</td>
				</tr>
				<?php }?>
			</table>
		</div> 
	</div>
</div>
</body>
</html>
