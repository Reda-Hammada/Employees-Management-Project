<?php
if(isset($_GET)){
$fichier = file_get_contents("personnes.json");
$data = json_decode($fichier);
foreach ($data as $value) {
     if($value[0]==$_GET["id"]){
        $afficherValue = $value;
         break;
     }
}
}

if(!empty($_POST)){
    $id = uniqid(false);
    $Prenom = $_POST['prenom'];
    $Nom = $_POST['nom'];
    $Age = $_POST['age'];
    $personModifier = array($id,$Prenom, $Nom,$Age);
    $fichier= file_get_contents("personnes.json");
    $data = json_decode($fichier);

    for ($i=0; $i < count($data); $i++) { 
        if ($data[$i][0]==$_GET["id"]) {
            $data[$i]=$personModifier;
        }
    }
    file_put_contents('personnes.json',json_encode($data));
    header("location:index.php");
}

?>

<html>
    <body>

<form action="" method="POST">

<input type="text" value=<?php echo $afficherValue[1] ?> name="prenom">
<input type="text" value=<?php echo $afficherValue[2] ?> name="nom" >
<input type="text" value=<?php echo $afficherValue[3] ?> name="age" >

<button type="submit">modifier</button>
</form>



    </body>
</html>