<?php require_once 'includes/cabecera.php'; ?>


<?php require_once 'includes/lateralEmpresa.php'; ?>



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
							<h2><?= $entrada['puesto'] ?></h2>
							<span class="fecha"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?></span>
							<p>
							<p class="detalle">Salario ₡</p><?= substr($entrada['salario'], 0, 180) . "" ?>
							<p class="detalle">Habilidades</p><?= substr($entrada['habilidades'], 0, 180) . "" ?>
							<p class="detalle">Descripcion del Puesto</p><?= substr($entrada['descripcion'], 0, 180) . "" ?>
							</p>
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