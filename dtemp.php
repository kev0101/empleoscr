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
//session_start();
$sql = "SELECT * FROM `empresa`,`usuarios` where nombre = '".$_SESSION['usuario']['nombre']."' and nom_emp = '".$_SESSION['usuario']['nombre']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $nom = $row['nom_emp'];
    $direc = $row['direccion'];
    $tel = $row['telefono'];
    $email = $row['email'];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
