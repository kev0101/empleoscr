<?php
if (isset($_POST)) {

	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Iniciar sesión
	if (!isset($_SESSION)) {
		session_start();
	}

	// Recorger los valores del formulario de registro
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	$password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
	$rol_id = isset($_POST['rol_id']) ? mysqli_real_escape_string($db, $_POST['rol_id']) : false;
	session_start();
	$_SESSION['nr']= $nombre;


	// Array de errores
	$errores = array();

	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
		$nombre_validado = true;
	} else {
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}



	// Validar el email
	if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$email_validado = true;
	} else {
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}

	// Validar la contraseña
	if (!empty($password)) {
		$password_validado = true;
	} else {
		$password_validado = false;
		$errores['password'] = "La contraseña está vacía";
	}

	if (!empty($rol_id)) {
		$rol_id_validado = true;
	} else {
		$rol_id_validado = false;
		$errores['rol_id'] = "Seleccione su rol";
	}

	$guardar_usuario = false;

	if (count($errores) == 0) {
		$guardar_usuario = true;

		// Cifrar la contraseña
		$password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

		// INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$email', '$password_segura', '$rol_id', CURDATE()); ";
		$guardar = mysqli_query($db, $sql);


		if ($guardar) {
			$_SESSION['completado'] = "El registro se ha completado con éxito";

			// Redirigir al Formulario segun esl rol seleccionado	
			$sql = "SELECT * FROM usuarios WHERE email= '$email'";

			$login = mysqli_query($db, $sql);
			$rol = mysqli_fetch_array($login);
			if ($rol['rol_id'] == 2) {
				header('Location: fromEmpresa.php');

			} else if ($rol['rol_id'] == 3) {
				header('Location: fromPersonales.php');
				
			} else  {
                echo "ERROR EN LOS DATOS INGRESADOS";
				header('Location: indexOferente.php');
			} 
		} else {
			$_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
		}
	} else {
		$_SESSION['errores'] = $errores;
	}
}
