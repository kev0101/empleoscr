<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateralEmpresa.php'; ?>
<?php require_once './dtemp.php'; ?>

<!-- CAJA PRINCIPAL -->
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div id="principal">
	<h1>Mis datos</h1>
	<div style="height: 200px; width: 60%; align-items: center; margin-left:100px;">
<div style="height: 260px; width: 670px; display: flex; justify-content: center;  flex-direction: column;
font-family: sans-serif; font-weight: bold; box-shadow: 8px 8px 16px rgba(165,177,198,0.8), -8px -9px 16px rgba(255, 255, 255, 0.8);
border-radius: 10px;">
<center>
<span class="fas fa-briefcase" style="font-size: 1.5cm;"></span>
</center>
<span class="cantidad" id="cont1"></span>
<center>
<span style="padding-bottom: 10px;
font-size: 0.9cm;"><?php echo $nom; ?></span>
</center>
<p style="padding-left: 10px;">CORREO: <?php echo $email; ?></p>
<p style="padding-left: 10px;">DIRECCION: <?php echo $direc; ?></p>
<p style="padding-left: 10px;">TELEFONO: <?php echo $tel; ?></p>
</div>
</div>
<a href="./formact/famp.php" style="margin-top: 100px; margin-left:20px;" class=" boton color_boton">Modificar</a>
</div> <!--fin principal-->

</body>
</html>
			
<?php require_once 'includes/footer.php'; ?>
