<?php
if (isset($_POST)) {

	// Conexión a la base de datos
	require_once 'includes/conexion.php';


	$guardar_usuario = false;

	if (count($errores) == 0) {
		$usuario = $_SESSION['usuario'];
		$guardar_usuario = true;

		// COMPROBAR SI EL EMAIL YA EXISTE
		$sql = "SELECT id, FROM usuarios WHERE email = '$email'";
		$isset_email = mysqli_query($db, $sql);
		$isset_user = mysqli_fetch_assoc($isset_email);

		if ($isset_user['id'] == $usuario['id'] || empty($isset_user)) {
			// ACTULIZAR USUARIO EN LA TABLA USUARIOS DE LA BBDD

			$sql = "UPDATE usuarios SET " .
				"nombre = '$nombre', " .
				"email = '$email' " .
				"WHERE id = " . $usuario['id'];
			

			$guardar = mysqli_query($db, $sql);

            
			if ($guardar) {
				$_SESSION['usuario']['nombre'] = $nombre;
				$_SESSION['usuario']['email'] = $email;
				$_SESSION['usuario']['nombre'] = $nombre;
				$_SESSION['usuario']['email'] = $email;

				$_SESSION['completado'] = "Tus datos se han actualizado con éxito";
			} else {
				$_SESSION['errores']['general'] = "Fallo al guardar el actulizar tus datos!!";
			}
		} else {
			$_SESSION['errores']['general'] = "El usuario ya existe!!";
		}
	} else {
		$_SESSION['errores'] = $errores;
	}
}

header('Location: mis-datos.php');
