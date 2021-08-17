<?php
session_start();
include("./dteof.php");
$id_USE = $_GET['ide'];
$puesto = $_GET['en'];

$servername = "bunsgm0899pcpprwck1n-mysql.services.clever-cloud.com";
$username = "ubgecafqqgs0cmyn";
$password = "wQAP6xRtiZSDW8yp9KyL";
$dbname = "bunsgm0899pcpprwck1n";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email FROM usuarios WHERE  id = '$id_USE'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    $correo = $row['email'];

  }
} else {
  echo "0 results";
}
$conn->close();

$titulo = 'Enviando desde EmpleosCR';

$mensaje = '<html>'.
	'<head><title></title> </head>'.
	'<body>'.
    '<h4 style="color: black;"> Un oferente ha aplicado para '.$puesto.' </h4>'.
    '<center>'.
    '<h1 style="color: black;">CURRICULUM</h1>'.
    '</center>'.
    '<center>'.
    '<div style=" color: black; width: 70%; heigth:50%; border: solid blue; border-radius:10px; padding-top: 10px;">'.
    '<h3>DATOS PERSONALES</h3>'.
    '<div style=" text-align:left; margin-left: 15px;">'.
    '<p style="font-weight: bold;">Nombre: '.$nom.' </p>'.
    '<p style="font-weight: bold;">Correo: '.$email.' </p>'.
    '<p style="font-weight: bold;">Identificación: '.$ide.' </p>'.
    '<p style="font-weight: bold;">Teléfono: '.$tel.' </p>'.
    '<p style="font-weight: bold;">Estado Civil: '.$civ.' </p>'.
    '<p style="font-weight: bold;">Fecha De Nacimiento: '.$idenac.' </p>'.
    '<p style="font-weight: bold;">Dirección: '.$direc.' </p>'.
    '<hr>'.
    '<h3>FORMACIÓN ACADEMICA</h3>'.
    '<p style="font-weight: bold;">Institución Primaria: '.$inst.' </p>'.
    '<p style="font-weight: bold;">Condición: '.$primaria.' </p>'.
    '<p style="font-weight: bold;">Institución Secundaria: '.$cole.' </p>'.
    '<p style="font-weight: bold;">Condición: '.$secundaria.' </p>'.
    '<p style="font-weight: bold;">Universidad: '.$carrera.' </p>'.
    '<p style="font-weight: bold;">Grado: '.$grado.' </p>'.
    '<p style="font-weight: bold;">Condición: '.$universidad.' </p>'.
    '<p style="font-weight: bold;">Otros: '.$otro.' </p>'.
    '<hr>'.
    '<h3>EXPERIENCIA LABORAL</h3>'.
    '<p style="font-weight: bold;">Ultimo Empleo: '.$ult.' </p>'.
    '<p style="font-weight: bold;">Cargo Desempeñado: '.$car.' </p>'.
    '<p style="font-weight: bold;">Telefono De Empresa: '.$telemp.' </p>'.
    '<p style="font-weight: bold;">Motivo De Salida: '.$motivo.' </p>'.
    '<p style="font-weight: bold;">Años Laborados: '.$anno.' </p>'.
    '<p style="font-weight: bold;">Disponibilidad Inmediata: '.$disp.' </p>'.
    '</div>'.
    '</div>'.
    '</center>'.
	'No responda a este correo.'.
	'<hr>'.
	'En caso de consultas contactar al +506 2537-68-82'.
	'</body>'.
	'</html>';

    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $cabeceras .= 'From: Empleos CR';



mail($correo,$titulo,$mensaje,$cabeceras);
mail($email,'EmpleosCR','Has aplicado para una oferta en '.$puesto.' No responda este mensaje.En caso de consultas contactar al +506 2537-68-82',$cabeceras);


header("Location: ./indexOferente.php")

?>