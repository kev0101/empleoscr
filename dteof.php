<?php
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

$sql = "SELECT * FROM usuarios,datos_personales,experiencia,formacion WHERE nombre = '".$_SESSION['usuario']['nombre']."' and nom_ofe_dp = '".$_SESSION['usuario']['nombre']."' and nom_ofe_exp = '".$_SESSION['usuario']['nombre']."' and nom_ofe_for = '".$_SESSION['usuario']['nombre']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $nom = $row['nombre'];
    $email = $row['email'];
    //-----------------------------//
    $ide = $row['ide'];
    $tel = $row['tel'];
    $civ = $row['civ'];
    $idenac = $row['nac'];
    $direc = $row['dir'];
    $fecha = $row['fec'];
    //-----------------------------//
    $ult = $row['ult'];
    $car = $row['car'];
    $telemp = $row['tel_emp'];
    $motivo = $row['mot'];
    $anno = $row['an'];
    $disp = $row['dis'];
    //------------------------------//
    $inst = $row['ins'];
    $primaria = $row['pri'];
    $cole = $row['col'];
    $secundaria = $row['sec'];
    $carrera = $row['carr'];
    $grado = $row['gra'];
    $universidad = $row['uni'];
    $otro = $row['otr'];

  }
} else {
  echo "0 results";
}
$conn->close();
?>