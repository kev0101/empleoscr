<?php

function enviarcorreo($entrada){  

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

$sql = "SELECT `email` FROM `usuarios` WHERE rol_id = '3'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    mail($row['email'],'NUEVA OFERTA DE EMPLEO','Se ha publicado una oferta en '.$entrada.' que te puede interesar');

  }
} else {
  echo "0 results";
}
$conn->close();
}

?>