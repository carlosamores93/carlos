<?php



	// Vamos a obtener los valores del formulario
	$nombre = $_POST['Name'];
	$asunto = $_POST['Asunto'];
	$email = $_POST['Email'];
	$tel = $_POST['Phone'];
	$msg = $_POST['Message'];




	$mensaje = 'Mensaje de ' . $nombre . ', con email ' . $email . '. Mensaje: ' . $msg;

	if(mail('amorescarlos93@hotmail.com', $asunto, $mensaje)){
		session_start();
        $_SESSION["mensaje"] = 'ok';
        header('Location: index.php');
	}
?>
