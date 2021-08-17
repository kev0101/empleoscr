<?php
if (isset($_POST)) {

	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Iniciar sesión
	if (!isset($_SESSION)) {
		session_start();
	}

	// Recorger los valores del formulario de registro
	$ult = isset($_POST['ult']) ? mysqli_real_escape_string($db, $_POST['ult']) : false;	
	$car = isset($_POST['car']) ? mysqli_real_escape_string($db, $_POST['car']) : false;
	$tel_emp = isset($_POST['tel_emp']) ? mysqli_real_escape_string($db, $_POST['tel_emp']) : false;
	$mot = isset($_POST['mot']) ? mysqli_real_escape_string($db, $_POST['mot']) : false;
	$an = isset($_POST['an']) ? mysqli_real_escape_string($db, $_POST['an']) : false;
	$dis = isset($_POST['dis']) ? mysqli_real_escape_string($db, $_POST['dis']) : false;

	session_start();
	$dato_nom= $_SESSION['nr'];

	// Array de errores
	$errores = array();

	// Validar los datos antes de guardarlos en la base de datos

	// Validar ultimo trabajo
	if (!empty($ult)) {
		$ult_validado = true;
	} else {
		$ult_validado = false;
		$errores['ult'] = "El campo de ultima empresa está vacío";
	}

	// Validar la cargo
	if (!empty($car)) {
		$car_validado = true;
	} else {
		$car_validado = false;
		$errores['car'] = "Falta Ingresar su ultimo cargo";
	}

	// Validar el telefono
	if (!empty($tel_emp)) {
		$tel_emp_validado = true;
	} else {
		$tel_emp_validado = false;
		$errores['tel_emp'] = "Falta Ingresar el telefono de su ultima empresa";
	}


	// Validar motivoo de salida
	if (!empty($mot)) {
		$mot_validado = true;
	} else {
		$mot_validado = false;
		$errores['mot'] = "Falta Ingresar el motivo de su salida";
	}

	$guardar_datosExp = false;

	if (count($errores) == 0) {
		$guardar_datosExp = true;

		// INSERTAR EMPRESA EN LA TABLA EMPRESA DE LA BBDD
		$sql = "INSERT INTO experiencia VALUES(null, '$dato_nom' , '$ult', '$car', '$tel_emp', '$mot', '$an', '$dis');";
		$guardar = mysqli_query($db, $sql);
		//		var_dump(mysqli_error($db));
		//		die();

		if ($guardar) {
			$_SESSION['completado'] = "El registro se ha completado con éxito";
			header('Location: fromFormacion.php');	
											
								
		} else {
			$_SESSION['errores']['general'] = "Fallo al guardar la Experiencia laboral!!";
			header('Location: fromExperiencia.php');
		}
	} else {
		$_SESSION['errores'] = $errores;
	  	header('Location: fromExperiencia.php');
	}


}