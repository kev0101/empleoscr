<?php
if (!isset($_POST['busqueda'])) {
	header("Location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">

	<h1>Busqueda: <?= $_POST['busqueda'] ?></h1>

	<?php
	$entradas = conseguirEntradas($db, null, null, $_POST['busqueda']);

	if (!empty($entradas) && mysqli_num_rows($entradas) >= 1) :
		while ($entrada = mysqli_fetch_assoc($entradas)) :
	?>
			<article class="entrada">
				<a href="entrada.php?id=<?= $entrada['id'] ?>">
					<div class="caja">
						<h2><?= $entrada['puesto'] ?></h2>
						<span class="fecha"><?= $entrada['categoria'] . ' | ' . $entrada['fecha'] ?></span>
						<p>
						<p class="detalle">Salario</p><?= substr($entrada['salario'], 0, 180) . "" ?>
						<p class="detalle">Habilidades</p><?= substr($entrada['habilidades'], 0, 180) . "" ?>
						<p class="detalle">Descripcion del Puesto</p><?= substr($entrada['descripcion'], 0, 180) . "" ?>
						</p>
						</p>

						</p>
					</div>
				</a>

			</article>
		<?php
		endwhile;
	else :
		?>
		<div class="alerta">No hay ofertas de empleo de esta categoría</div>
	<?php endif; ?>
</div>
<!--fin principal-->

<?php require_once 'includes/footer.php'; ?>