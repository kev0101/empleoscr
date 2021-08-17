<?php
//Conexion a base de datos 
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8 /">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>BOLSA EMPLEO</title>

    <link rel="stylesheet" type="text/css" href="../ProyectoSitios/assets/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../ProyectoSitios/assets/css/formstyle.css" />

</head>

<body>
    <!--Inicio de Registro-->
    <section class="form-register">

        <h4>Expereincia Laboral</h4>

        <!-- Mostrar Errores -->
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general'] ?>
            </div>
        <?php endif; ?>

        <form action="guardar-Experiencia.php" method="POST">

            <input class="controls" type="text" name="ult" id="ult" placeholder="Ultimo empleo"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'ult') : ''; ?>

            <input class="controls" type="text" name="car" id="car" placeholder="Cargo desempeñado" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'car') : ''; ?>

            <input class="controls" type="text" name="tel_emp" id="tel_emp" placeholder="Ingrese el teléfono de su ultima Empresa" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'tel_emp') : ''; ?>

            <input class="controls" type="text" name="mot" id="mot" placeholder="Motivo de salida" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'mot') : ''; ?>

            <select class="controls" name="an" cambia()">
                <option value="0">Años de laborados
                <option value="1"> 1 año
                <option value="2"> 2 años
                <option value="3"> 3 años
                <option value="4"> 4 años
                <option value="5"> 5 años
                <option value="6"> 6 años
                <option value="7"> 7 años
                <option value="8"> 8 años
                <option value="9"> 9 años
                <option value="10"> 10 años 
                <option value="15"> 15 años 
                <option value="20"> 20 años
                <option value="mas"> Más de 20 años
            </select>
         
            
				<fieldset class="controls">
					<legend>Disponibilidad inmediata</legend>
					<label>
						<input class="dispo" type="radio" name="dis" value="si"> Si
					</label>
					<label>
						<input  class="dispo" type="radio" name="dis" value="no"> No				
					</label>					
				</fieldset>
                <br/>


            <input class="botons" type="submit" value="Siguiente ->" />

            <!--<p><a href="index.php">¿Ya tengo una Cuenta?</a></p>-->

            <!--<a href="index.php">Atrás</a>-->
        </form>
        <?php
        borrarErrores();
        
        ?>
        
    </section>

</body>

</html>