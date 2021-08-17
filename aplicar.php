<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateralOferente.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Aplicar Oferta</h1>

	<?php if (isset($_SESSION['completado'])) : ?>
		<div class="alerta alerta-exito">
			<?= $_SESSION['completado'] ?>
		</div>
	<?php elseif (isset($_SESSION['errores']['general'])) : ?>
		<div class="alerta alerta-error">
			<?= $_SESSION['errores']['general'] ?>
		</div>
	<?php endif; ?>

	<form action="enviar-datos-ofe.php" method="POST">

		<!--Datos Personales--->

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?= $_SESSION['usuario']['nombre']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

		<label for="email">Email</label>
		<input type="email" name="email" value="<?= $_SESSION['usuario']['email']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

		<label for="ide">Identificación</label>
		<input type="ide" name="ide" value="<?= $_SESSION['usuario']['ide']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'ide') : ''; ?>

		<label for="tel">Teléfono</label>
		<input type="tel" name="tel" value="<?= $_SESSION['usuario']['tel']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'tel') : ''; ?>

		<label for="civ">Estado Civil</label>
		<input type="text" name="civ" value="<?= $_SESSION['usuario']['civ']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'civ') : ''; ?>

		<label for="nac">Fecha de Nacimiento</label>
		<input type="text" name="nac" value="<?= $_SESSION['usuario']['nac']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nac') : ''; ?>

		<label for="dir">Dirección</label>
		<input type="text" name="dir" value="<?= $_SESSION['usuario']['dir']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'dir') : ''; ?>


		<!--Formacion--->

		<label for="ins">Nombre de Institución Primaria</label>
		<input type="text" name="ins" value="<?= $_SESSION['usuario']['ins']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'ins') : ''; ?>

		<label for="pri">Estudios</label>
		<input type="text" name="pri" value="<?= $_SESSION['usuario']['pri']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'pri') : ''; ?>

		<label for="col">Nombre de Institución Secundaria</label>
		<input type="text" name="col" value="<?= $_SESSION['usuario']['col']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'col') : ''; ?>

		<label for="sec">Estudios</label>
		<input type="text" name="sec" value="<?= $_SESSION['usuario']['sec']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'sec') : ''; ?>

		<label for="carr">Profesión</label>
		<input type="text" name="carr" value="<?= $_SESSION['usuario']['carr']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'carr') : ''; ?>

		<label for="gra">Grado Académico</label>
		<input type="text" name="gra" value="<?= $_SESSION['usuario']['gra']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'gra') : ''; ?>

		<label for="uni">Estudios</label>
		<input type="text" name="uni" value="<?= $_SESSION['usuario']['uni']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'uni') : ''; ?>

		<label for="otr">Estudios</label>
		<input type="text" name="otr" value="<?= $_SESSION['usuario']['otr']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'otr') : ''; ?>







		<!--Experiencia--->


		<label for="ult">Ultimó Empleo</label>
		<input type="text" name="utl" value="<?= $_SESSION['usuario']['ult']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'ult') : ''; ?>

		<label for="car">Puesto</label>
		<input type="text" name="car" value="<?= $_SESSION['usuario']['car']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'car') : ''; ?>

		<label for="tel_emp">Teléfono de la Empresa</label>
		<input type="tel_emp" name="tel_emp" value="<?= $_SESSION['usuario']['tel_emp']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'tel_emp') : ''; ?>

		<label for="mot">Motivo de Salida</label>
		<input type="mot" name="mot" value="<?= $_SESSION['usuario']['mot']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'mot') : ''; ?>

		<label for="an">Años laborados</label>
		<input type="an" name="an" value="<?= $_SESSION['usuario']['an']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'an') : ''; ?>

		<label for="dis">Disponibilidad</label>
		<input type="dis" name="dis" value="<?= $_SESSION['usuario']['dis']; ?>" />
		<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'dis') : ''; ?>



		<input type="submit" name="submit" value="Aplicar" />
	</form>
	<?php borrarErrores(); ?>

</div>
<!--fin principal-->

