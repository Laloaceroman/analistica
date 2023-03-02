<?php  

// Llamando a los campos
$name = $_POST['name'];
$company = $_POST['company'];
$telefono = $_POST['phone'];
$correo = $_POST['email'];
$mensaje = $_POST['message'];


// Datos para el correo
$destinatario  = 'contacto@analistica.cl';
$title = "Contacto desde nuestra web";
$carta = "Mensaje enviado desde la web Analítica\n";
$carta .= "Nombre y Apellido: $name \n";
$carta .= "Empresa: $company \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";


// Enviando Mensaje
mail($destinatario, $title, $carta);
header('Location:send.html');

?>