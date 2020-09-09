<?php
   $dueno = 'yonapele307@gmail.com';

   $discord = $_POST['discord'];
   $minecraft = $_POST['minecraft'];
   $mensaje = $_POST['mensaje'];
   $email = $_POST['email']


   $header ="Enviado de MineTow";
   $mensajeCompleto ="De:" $discord . "Para:" $minecraft;

   mail($dueno, $mensaje, $mensajeCompleto,$header);
   


?>