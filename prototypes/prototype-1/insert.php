<?php

if(!empty($_POST)){
	$id =uniqid(false);
	$Prenom = $_POST['prenom'];
	$Nom = $_POST['nom'];
	$Age = $_POST['age'];
	$person = array($id,$Prenom,$Nom,$Age);
	$fichier = file_get_contents("personnes.json");
	$data = json_decode($fichier);
	array_push($data,$person);	
	
	file_put_contents("personnes.json",json_encode($data))	;
	header("location: index.php"); 

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<form action="" method='post'>
	
<input type="text" name="prenom">
<input type="text" name="nom">
<input type="text" name="age">

<button type='submit'>ajoute</button>
</form>

</body>
</html>