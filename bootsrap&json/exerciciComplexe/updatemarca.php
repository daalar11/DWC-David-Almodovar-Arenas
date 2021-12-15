<?php
$conn = new mysqli("localhost", "root", "", "concesionari");

	$objecte=json_decode($_REQUEST['x']);
    $id = $objecte->id;
 	$nom = mysqli_real_escape_string($conn,$objecte->nom);
 	$query = "UPDATE marca SET nom='".$nom."' WHERE id='".$id."'";
 	if(mysqli_query($conn, $query)){
  		echo 'OK';
 	}
 	else {
 		echo 'ERROR '.$query;
 	}

?>


