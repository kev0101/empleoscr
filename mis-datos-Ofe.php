<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateralOferente.php'; ?>
<?php require_once './dteof.php';  ?>

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
	<br>
	<div style="height: 200px; width: 60%; align-items: center; margin-left:25px;">
<div style="height: 360px; width: 770px; display: flex; justify-content: center;  flex-direction: column;
font-family: sans-serif; font-weight: bold; box-shadow: 8px 8px 16px rgba(165,177,198,0.8), -8px -9px 16px rgba(255, 255, 255, 0.8);
border-radius: 10px;">
<center>
<span class="fas fa-user" style="font-size: 1.5cm;"></span>
</center>
<span class="cantidad" id="cont1"></span>
<center>
<span style="padding-bottom: 10px;
font-size: 0.9cm; ">Datos Personales</span>
</center>
<p style="padding-left: 10px;">NOMBRE: <?php echo $nom; ?></p>
<p style="padding-left: 10px;">IDENTIFICACIÓN: <?php echo $ide; ?></p>
<p style="padding-left: 10px;">TELEFONO: <?php echo $tel; ?></p>
<p style="padding-left: 10px;">CORREO: <?php echo $email; ?></p>
<p style="padding-left: 10px;">ESTADO CIVI: <?php echo $civ; ?></p>
<p style="padding-left: 10px;">NACIONALIDAD: <?php echo $idenac; ?></p>
<p style="padding-left: 10px;">FECHA DE NACIMIENTO: <?php echo $fecha; ?></p>

</div>
</div>

<div style="height: 200px; width: 60%; align-items: center; margin-left:25px; margin-top:200px">
<div style="background-color: rgba(255, 255, 255, .15);  
 backdrop-filter: blur(5px); height: 400px; width: 770px; display: flex; justify-content: center; flex-direction: column;
font-family: sans-serif; font-weight: bold; box-shadow: 8px 8px 16px rgba(165,177,198,0.8), -8px -9px 16px rgba(255, 255, 255, 0.8);
border-radius: 10px;">
<center>
<span class="fas fa-user-graduate" style="font-size: 1.5cm;"></span>
</center>
<span class="cantidad" id="cont1"></span>
<center>
<span style="padding-bottom: 10px;
font-size: 0.9cm; ">Formación academica</span>
</center>
<p style="padding-left: 10px;">ESCUELA: <?php echo $inst; ?></p>
<p style="padding-left: 10px;">PRIMARIA: <?php echo $primaria; ?></p>
<p style="padding-left: 10px;">COLEGIO: <?php echo $cole; ?></p>
<p style="padding-left: 10px;">SECUNDARIA: <?php echo $secundaria; ?></p>
<p style="padding-left: 10px;">CARRERA: <?php echo $carrera; ?></p>
<p style="padding-left: 10px;">GRADO: <?php echo $grado; ?></p>
<p style="padding-left: 10px;">UNIVERSIDAD: <?php echo $universidad; ?></p>
<p style="padding-left: 10px;">OTROS: <?php echo $otro; ?></p>

</div>
</div>

<div style="height: 200px; width: 60%; align-items: center; margin-left:25px; margin-top:250px">
<div style="background-color: rgba(255, 255, 255, .15);  
 backdrop-filter: blur(5px); height: 360px; width: 770px; display: flex; justify-content: center; flex-direction: column;
font-family: sans-serif; font-weight: bold; box-shadow: 8px 8px 16px rgba(165,177,198,0.8), -8px -9px 16px rgba(255, 255, 255, 0.8);
border-radius: 10px;">
<center>
<span class="fas fa-address-card" style="font-size: 1.5cm;"></span>
</center>
<span class="cantidad" id="cont1"></span>
<center>
<span style="padding-bottom: 10px;
font-size: 0.9cm; ">EXPERIENCIA</span>
</center>
<p style="padding-left: 10px;">ULTIMO EMPLEO: <?php echo $ult; ?></p>
<p style="padding-left: 10px;">CARGO DESEMPEÑADO: <?php echo $car; ?></p>
<p style="padding-left: 10px;">TELEFONO EMPRESA: <?php echo $telemp; ?></p>
<p style="padding-left: 10px;">MOTIVO DE SALIDA: <?php echo $motivo; ?></p>
<p style="padding-left: 10px;">AÑOS EN LA EMPRESA: <?php echo $anno; ?></p>
<p style="padding-left: 10px;">DISPONIBILIDAD INMEDIATA: <?php echo $disp; ?></p>

</div>
</div>
<a href="./formact/fofdp.php" style="margin-top: 200px; margin-left:40px;" class=" boton color_boton">Modificar</a>


</body>
</html>




</div> <!--fin principal-->
			
<?php require_once 'includes/footer.php'; ?>
