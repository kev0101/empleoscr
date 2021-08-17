<?php
if (isset($_POST)) {

	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Iniciar sesión
	if (!isset($_SESSION)) {
		session_start();
	}

	// Recorger los valores del formulario de registro

	$ins = isset($_POST['ins']) ? mysqli_real_escape_string($db, $_POST['ins']) : false;
	$pri = isset($_POST['pri']) ? mysqli_real_escape_string($db, $_POST['pri']) : false;
	$col = isset($_POST['col']) ? mysqli_real_escape_string($db, $_REQUEST['col']) : false;
	$sec = isset($_POST['sec']) ? mysqli_real_escape_string($db, $_POST['sec']) : false;	
	$carr = isset($_POST['carr']) ? mysqli_real_escape_string($db, $_POST['carr']) : false;
	$gra = isset($_POST['gra']) ? mysqli_real_escape_string($db, $_POST['gra']) : false;
	$uni = isset($_POST['uni']) ? mysqli_real_escape_string($db, $_POST['uni']) : false;
	$otr = isset($_POST['otr']) ? mysqli_real_escape_string($db, $_POST['otr']) : false;

	session_start();
	$dato_nom= $_SESSION['nr'];


	// Array de errores
	$errores = array();

	// Validar los datos antes de guardarlos en la base de datos
	// Validar la institucion
	if (!empty($ins)) {
		$ins_validado = true;
	} else {
		$ins_validado = false;
		$errores['ins'] = "Falta ingresar el nombre de la Prmaria o Escuela";
	}

	// Validar el colegio
	if (!empty($col)) {
		$col_validado = true;
	} else {
		$col_validado = false;
		$errores['col'] = "Falta ingresar el nombre de la Secundaria o Colegio";
	}

	// Validar el Estado Carrera
	if (!empty($uni)) {
		$uni_validado = true;
	} else {
		$uni_validado = false;
		$errores['uni'] = "Falta ingresar el nombre de la Carrera o Universidad";
	}

	// Validar otros estudios
	if (!empty($otr)) {
		$otr_validado = true;
	} else {
		$otr_validado = false;
		$errores['otr'] = "Falta Ingresar si cuenta con otros estudios";
	}

	
	

	$guardar_datosAca = false;

	if (count($errores) == 0) {
		$guardar_datosAca = true;

		// INSERTAR INFORMACION ACADEMICA EN LA TABLA FORMACION DE LA BBDD
		$sql = "INSERT INTO formacion VALUES(null, '$dato_nom', '$ins', '$pri', '$col', '$sec', '$carr', '$gra', '$uni', '$otr');";
		$guardar = mysqli_query($db, $sql);
		//		var_dump(mysqli_error($db));
		//		die();

		if ($guardar) {
			$_SESSION['completado'] = "El registro se ha completado con éxito";
			header('Location: index.php');	
											
								
		} else {
			$_SESSION['errores']['general'] = "Fallo al guardar el los datos personales!!";
			header('Location: fromFormacion.php');
		}
	} else {
		$_SESSION['errores'] = $errores;
	  	header('Location: fromFormacion.php');
	}


}