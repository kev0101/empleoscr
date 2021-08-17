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

        <h4>Formación Academica</h4>

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

        <form action="guardar-Formacion.php" method="POST"> 
            
        
        <input class="controls" type="text" name="ins" id="ins" placeholder="Nombre de la Instutución o Escuela"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'ins') : ''; ?>
           
            <select class="controls" name="pri" cambia()">
                <option value="0">Primaria
                <option value="Incompleta"> Incompleta
                <option value="Cursando"> Cursando
                <option value="Completa"> Completa                
            </select> 
            
            
            <input class="controls" type="text" name="col" id="col" placeholder="Nombre de la Instutución o Colegio"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'col') : ''; ?>
            
            <select class="controls" name="sec" cambia()">
                <option value="0">Secundaria
                <option value="Incompleta"> Incompleta
                <option value="Cursando"> Cursando
                <option value="Completa"> Completa                
            </select> 

          
            
            <input class="controls" type="text" name="carr" id="carr" placeholder="Nombre de la carrera Universitaria"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'carr') : ''; ?>

            <select class="controls" name="gra" cambia()">
                <option value="0">Grado Academico
                <option value="Tecnico"> Técnico
                <option value="Diplomado"> Diplomado
                <option value="Bachiller"> Bachiller
                <option value="Licenciatura"> Licenciatura
                <option value="Maestria"> Maestria 
                <option value="Otra"> Otra                
            </select> 

            <select class="controls" name="uni" cambia()">
                <option value="0">Carrera Universitaria
                <option value="Incompleta"> Incompleta
                <option value="Cursando"> Cursando
                <option value="Completa"> Completa                
            </select> 

            
            <input class="controls" type="text" name="otr" id="otr" placeholder="Otros Estudios"/>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'otr') : ''; ?>


            <input class="botons" type="submit" value="Finalizar Formulario ->" />

            <!--<p><a href="index.php">¿Ya tengo una Cuenta?</a></p>-->

            <!--<a href="index.php">Atrás</a>-->
        </form>
        <?php
        borrarErrores();
        
        ?>
        
    </section>

</body>

</html>