<?php

if(isset($_POST)){
	include("./obtcorreoentrada.php");
	require_once 'includes/conexion.php';
	
	$puesto = isset($_POST['puesto']) ? mysqli_real_escape_string($db, $_POST['puesto']) : false;
	$salario = isset($_POST['salario']) ? mysqli_real_escape_string($db, $_POST['salario']) : false;
	$habilidades = isset($_POST['habilidades']) ? mysqli_real_escape_string($db, $_POST['habilidades']) : false;
	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
	$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
	$usuario = $_SESSION['usuario']['id'];
	
	// Validación
	$errores = array();
	
	if(empty($puesto)){
		$errores['puesto'] = 'El puesto no es válido';
	}

	if(empty($salario)){
		$errores['salario'] = 'El dato ingresado no es válido';
	}

	if(empty($habilidades)){
		$errores['habilidades'] = 'El dato ingresado no es válido';
	}
	
	if(empty($descripcion)){
		$errores['descripcion'] = 'La descripción no es válida';
	}
	
	if(empty($categoria) && !is_numeric($categoria)){
		$errores['categoria'] = 'La categoría no es válida';
	}
	
	
	if(count($errores) == 0){
		if(isset($_GET['editar'])){
			$entrada_id = $_GET['editar'];
			$usuario_id = $_SESSION['usuario']['id'];
			
			$sql = "UPDATE entradas SET puesto='$puesto', salario='$salario', habilidades='$habilidades', descripcion='$descripcion', categoria_id=$categoria ".
					" WHERE id = $entrada_id AND usuario_id = $usuario_id";

		}else{
			$sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$puesto','".$_SESSION['usuario']['nombre']."' ,'$salario', '$habilidades','$descripcion', CURDATE());";
		}
		$guardar = mysqli_query($db, $sql);
		enviarcorreo($puesto);
		header("Location: indexEmpresa.php");
	}else{

		$_SESSION["errores_entrada"] = $errores;
		
		if(isset($_GET['editar'])){
			header("Location: editar-entrada.php?id=".$_GET['editar']);
		}else{
			header("Location: crear-entradas.php");
		}
	}
	
}

