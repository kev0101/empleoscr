<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$categoria_actual = conseguirCategoria($db, $_GET['id']);

if (!isset($categoria_actual['id'])) {
	header("Location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateralAdmin.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">

	<h1>Entradas de <?= $categoria_actual['nombre'] ?></h1>

	<?php
	$entradas = conseguirEntradas($db, null, $_GET['id']);

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
					</div>
				</a>
			</article>
		<?php
		endwhile;
	else :
		?>
		<div class="alerta">No hay ofertas de esta categoría</div>
	<?php endif; ?>
</div>
<!--fin principal-->

<?php require_once 'includes/footer.php'; ?>