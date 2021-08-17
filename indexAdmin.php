<?php require_once 'includes/cabecera.php'; ?>

<?php require_once 'includes/lateralAdmin.php'; ?>



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
							<p class="detalle">
							<p>Salario ₡</p><?= substr($entrada['salario'], 0, 180) . "" ?>
							<p>Habilidades</p><?= substr($entrada['habilidades'], 0, 180) . "" ?>
							<p>Descripcion del Puesto</p><?= substr($entrada['descripcion'], 0, 180) . "" ?>
							</p>
						</div>
					</a>
				</article>
		<?php
			endwhile;
		endif;
		?>

	</div>


</section>