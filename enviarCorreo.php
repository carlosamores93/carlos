<?php



	// Vamos a obtener los valores del formulario
	$nombre = $_POST['Name'];
	$asunto = $_POST['Asunto'];
	$email = $_POST['Email'];
	$tel = $_POST['Phone'];
	$msg = $_POST['Message'];




	$mensaje = 'Mensaje de ' . $nombre . ', con email ' . $email . '  y número de teléfono: ' . $tel . '. Mensaje: ' . $msg;

	if(mail('admin@amorescarlos.com', $asunto, $mensaje)){
        header('Location: index.php');
	}
?>
