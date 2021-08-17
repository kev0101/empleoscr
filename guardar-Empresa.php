<?php
if (isset($_POST)) {

	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Iniciar sesión
	if (!isset($_SESSION)) {
		session_start();
	}

	// Recorger los valores del formulario de registro
	$direccion = isset($_POST['direccion']) ? mysqli_real_escape_string($db, $_POST['direccion']) : false;
	$telefono = isset($_POST['telefono']) ? mysqli_real_escape_string($db, $_POST['telefono']) : false;
	session_start();
	$dato_nom= $_SESSION['nr'];


	// Array de errores
	$errores = array();

	// Validar los datos antes de guardarlos en la base de datos
	// Validar direccion

	if (!empty($direccion)) {
		$direccion_validado = true;
	} else {
		$direccion_validado = false;
		$errores['direccion'] = "La direccion está vacía";
	}

	// Validar la telefono
	if (!empty($telefono)) {
		$telefono_validado = true;
	} else {
		$telefono_validado = false;
		$errores['telefono'] = "Falta Ingresar su telefono";
	}

	$guardar_datosEmpresa = false;

	if (count($errores) == 0) {
		$guardar_datosEmpresa = true;

		// INSERTAR EMPRESA EN LA TABLA EMPRESA DE LA BBDD
		$sql = "INSERT INTO empresa VALUES(null, '$dato_nom' , '$direccion','$telefono');";
		$guardar = mysqli_query($db, $sql);
		//		var_dump(mysqli_error($db));
		//		die();

		if ($guardar) {
			$_SESSION['completado'] = "El registro se ha completado con éxito";
			header('Location: index.php');	
											
								
		} else {
			$_SESSION['errores']['general'] = "Fallo al guardar el los datos de la Empresa!!";
			header('Location: fromEmpresa.php');
		}
	} else {
		$_SESSION['errores'] = $errores;
	  	header('Location: fromEmpresa.php');
	}


}