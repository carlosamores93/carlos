<?php



	// Vamos a obtener los valores del formulario
	$nombre = $_POST['Name'];
	$company = $_POST['CompanyName'];
	$email = $_POST['Email'];
	$tel = $_POST['Phone'];
	$msg = $_POST['Message'];




	echo "$nombre";
	echo "$company";
	echo "$email";
	echo "$tel";
	echo "$msg";

	
	//header('Location: index.php');


?>
