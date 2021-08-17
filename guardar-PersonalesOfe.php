<?php
if (isset($_POST)) {

	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Iniciar sesión
	if (!isset($_SESSION)) {
		session_start();
	}

	// Recorger los valores del formulario de registro
	$ide = isset($_POST['ide']) ? mysqli_real_escape_string($db, $_POST['ide']) : false;
	$tel = isset($_POST['tel']) ? mysqli_real_escape_string($db, $_POST['tel']) : false;
	$civ = isset($_POST['civ']) ? mysqli_real_escape_string($db, $_POST['civ']) : false;
	$nac = isset($_POST['nac']) ? mysqli_real_escape_string($db, $_REQUEST['nac']) : false;
	$dir = isset($_POST['dir']) ? mysqli_real_escape_string($db, $_POST['dir']) : false;
	$fec = isset($_POST['fec']) ? mysqli_real_escape_string($db, $_POST['fec']) : false;
	session_start();
	$dato_nom= $_SESSION['nr'];



	// Array de errores
	$errores = array();

	// Validar los datos antes de guardarlos en la base de datos
	// Validar la identificacion
	if (!empty($ide)) {
		$ide_validado = true;
	} else {
		$ide_validado = false;
		$errores['ide'] = "La identificacion está vacía";
	}

	// Validar la telefono
	if (!empty($tel)) {
		$tel_validado = true;
	} else {
		$tel_validado = false;
		$errores['tel'] = "Falta Ingresar su telefono";
	}

	// Validar el Estado civil
	if (!empty($civ)) {
		$civ_validado = true;
	} else {
		$civ_validado = false;
		$errores['civ'] = "Falta Ingresar su  estado civil";
	}

	// Validar Nacionalidad
	if (!empty($nac)) {
		$nac_validado = true;
	} else {
		$nac_validado = false;
		$errores['nac'] = "Falta Ingresar su nacionalidad";
	}

	// Validar direccion
   	if (!empty($dir)) {
		$dir_validado = true;
	} else {
		$dir_validado = false;
		$errores['dir'] = "La direccion está vacía";
	}

	// Validar fecha
	if (!empty($fec)) {
		$fec_validado = true;
	} else {
		$fec_validado = false;
		$errores['fec'] = "La fecha está vacía";
	}


	
	$guardar_datosPersonales = false;

	if (count($errores) == 0) {
		$guardar_datosPersonales = true;

		// INSERTAR EMPRESA EN LA TABLA EMPRESA DE LA BBDD
		$sql = "INSERT INTO datos_personales VALUES(null, '$dato_nom', '$ide', '$tel', '$civ', '$nac', '$dir', '$fec');";
		$guardar = mysqli_query($db, $sql);
		//		var_dump(mysqli_error($db));
		//		die();

		if ($guardar) {
			$_SESSION['completado'] = "El registro se ha completado con éxito";
			header('Location: fromExperiencia.php');	
											
								
		} else {
			$_SESSION['errores']['general'] = "Fallo al guardar el los datos personales!!";
			header('Location: fromPersonales.php');
		}
	} else {
		$_SESSION['errores'] = $errores;
	  	header('Location: fromPersonales.php');
	}


}