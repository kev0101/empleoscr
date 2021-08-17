<?php require_once 'includes/cabecera.php'; ?>


<?php require_once 'includes/lateralOferente.php'; ?>



<!--Inicio de Articulos-->
<!--Inicio de Articulos-->
<section id="articles">
	<!-- CAJA PRINCIPAL -->
	<div id="principal">
		<div class="clearfix"></div>
		<h1>Ultimas ofertas de empleo</h1>

		<?php
		$entradas = conseguirEntradas($db, true);
		if (!empty($entradas)) :
			while ($entrada = mysqli_fetch_assoc($entradas)) :
		?>
				<article class="entrada">
					<a href="entrada.php?id=<?= $entrada['id'] ?>">
						<div class="caja">

							<?php if (isset($_SESSION['usuario'])) : ?>

							<?php endif; ?>

							<h2><?= $entrada['puesto'] ?></h2>
							<span class="fecha"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?></span>

							<p>
							<p class="detalle">Salario ₡</p><?= substr($entrada['salario'], 0, 180) . "" ?>
							<p class="detalle">Habilidades</p><?= substr($entrada['habilidades'], 0, 180) . "" ?>
							<p class="detalle">Descripcion del Puesto</p><?= substr($entrada['descripcion'], 0, 180) . "" ?>
							</p>
							<!--botones-->
							<a href="aplica.php?ide=<?php echo $entrada['usuario_id']; ?>&en=<?php echo $entrada['puesto']; ?>" id="aplicar" class="boton boton_aplicar">Aplicar Oferta</a>

						</div>
					</a>
				</article>
		<?php
			endwhile;
		endif;
		?>

		<div id="ver-todas">
			<a class="boton_ver" href="entradas.php">Ver todas las ofertas</a>
		</div>


	</div>


</section>
<!--fin principal-->