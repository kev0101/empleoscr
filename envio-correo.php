<?php


function correo($id){
 	// Conexión a la base de datos
     include 'includes/conexion.php';
     $sql= "SELECT * FROM datos_personales, experiencia, formacion, usuarios WHERE '$id'";
     $enviar = mysqli_query($db, $sql);
     while($resultado=$enviar->fetch_assoc()){
         $nombre= $resultado['nombre'];
         $email= $resultado['email'];
         $ide= $resultado['ide'];
         $tel= $resultado['tel'];
         $civ= $resultado['civ'];
         $nac= $resultado['nac'];
         $dir= $resultado['dir'];
         $ult= $resultado['ult'];
         $car= $resultado['car'];
         $tel_emp= $resultado['tel_emp'];
         $mot= $resultado['mot'];
         $an= $resultado['an'];
         $dis= $resultado['dis'];
         $ins= $resultado['ins'];
         $pri= $resultado['pri'];
         $col= $resultado['col'];
         $sec= $resultado['sec'];
         $carr= $resultado['carr'];
         $gra= $resultado['gra'];
         $uni= $resultado['uni'];
         $otr= $resultado['otr'];
     }

     return $email;
    // mail('empleos2021.cr@gmail.com','Asunto','Mensaje','Cabecera');
          $header = "empleos2021.cr@gmail.com" . "\r\n";
          $header = "empleos2021.cr@gmail.com" . "\r\n";
          $header = "X-Mailer: PHP/" . phpversion();
          $mail = mail($nombre, $email, $civ, $nac, $header);
     
}


 $variable='1'; 
 echo correo($variable);
