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

        <h4>Formulario de Empresa</h4>

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

        <form action="guardar-Empresa.php" method="POST">

            <textarea class="controls" type="text" name="direccion" id="direccion" placeholder="Ingrese la  de su dirección Empresa"></textarea>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'direccion') : ''; ?>

            <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese el teléfono de su Empresa" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'telefono') : ''; ?>


            <input class="botons" type="submit" value="Completar Registro" />

            <!--<p><a href="index.php">¿Ya tengo una Cuenta?</a></p>-->

            <!--<a href="index.php">Atrás</a>-->
        </form>
        <?php
        borrarErrores();
        
        ?>
        
    </section>

</body>

</html>