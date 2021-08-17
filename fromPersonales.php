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

        <h4>Datos Personales</h4>

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



        <form action="guardar-PersonalesOfe.php" method="POST">


            <input class="controls" type="text" name="ide" id="ide" placeholder="Ingrese su identificación" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'ide') : ''; ?>

            <input class="controls" type="text" name="tel" id="tel" placeholder="Ingrese su teléfono" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'tel') : ''; ?>

            <select class="controls" name="civ" cambia()">
                <option value="0">Seleccione su estado civil
                <option value="soltero">Soltero
                <option value="casado">Casado
                <option value="divorciado">Divorciado
                <option value="sepparacion">Separación en proceso judicial
                <option value="viudo">Viudo
                <option value="concubinato">Concubinato

            </select>

            <select class="controls" name="nac" cambia()">
                <option value="0">Seleccione su nacionalidad
                <option value="Costa_Rica ">Costa Rica
                <option value="Nicaragua">Nicaragua
                <option value="Mexico">Mexico
                <option value="Guatemala">Guatemala
                <option value="El_Salvador">El Salvador
                <option value="Honduras">Honduras
                <option value="Panama">Panáma
            </select>


            <textarea class="controls" type="text" name="dir" id="dir" placeholder="Ingrese su dirección"></textarea>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'dir') : ''; ?>

            <!--   CALENDARIO -->
            <h3>Fecha de nacimiento</h3>

            <input class="controls" type="date" name="fec" id="fec" placeholder="Ingrese su  fecha de nacimiento" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'fec') : ''; ?>

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