<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateralEmpresa.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear oferta</h1>
	<p>
		Añade nuevas ofertas laborales al blog para que los usuarios puedan
		leerlas y aplicar a las vacantes.
	</p>
	<br/>
	<form action="guardar-entrada.php" method="POST">
		<label for="puesto">Puesto/Profesión:</label>
		<input type="text" name="puesto" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'puesto') : ''; ?>

		<label for="salario">Salario ₡:</label>
		<input type="text" name="salario" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'salario') : ''; ?>

		<label for="habilidades">Habilidades:</label>
		<input type="text" name="habilidades" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'habilidades') : ''; ?>
		
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
		
		<label for="categoria">Categoría:</label>
		<select name="categoria">
			<?php 
				$categorias = conseguirCategorias($db); 
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)): 
			?>
				<option value="<?=$categoria['id']?>">
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
			
