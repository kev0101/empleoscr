<?php
if (isset($_POST['enviar'])) {
     if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['telefono']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
          $name = $_POST['name'];
          $asunto = $_POST['asunto'];
          $telefono = $_POST['telefono'];
          $msg = $_POST['msg'];
          $email = $_POST['email'];

          $header = "empleos2021.cr@gmail.com" . "\r\n";
          $header = "empleos2021.cr@gmail.com" . "\r\n";
          $header = "X-Mailer: PHP/" . phpversion();
          $mail = mail($email, $asunto, $telefono, $msg, $header);
          if ($mail) {
               echo "<h4> ¡Mail enviado exitosamente!</h4>";
          }
     }
}
