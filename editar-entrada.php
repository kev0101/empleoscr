<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$entrada_actual = conseguirEntrada($db, $_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateralEmpresa.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Editar oferta</h1>
	<p>
		Edita tu oferta <?=$entrada_actual['puesto']?>
	</p>
	<br/>
	<form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
		<label for="puesto">Puesto:</label>
		<input type="text" name="puesto" value="<?=$entrada_actual['puesto']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'puesto') : ''; ?>
		
		<label for="salario">Salario:</label>
		<input type="text" name="salario" value="<?=$entrada_actual['salario']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'salario') : ''; ?>
       
		<label for="habilidades">Habilidades:</label>
		<input type="text" name="habilidades" value="<?=$entrada_actual['habilidades']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'habilidades') : ''; ?>

		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
		
		<label for="categoria">Categoría</label>
		<select name="categoria">
			<?php 
				$categorias = conseguirCategorias($db); 
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)): 
			?>
			<option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>>
					<?=$categoria['nombre']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->

