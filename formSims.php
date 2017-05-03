<?php
    $name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$empresa = $_POST['empresa'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: WEB PROSSEA'; 
	$to = 'PROSSEA<rob_cal_sam@outlook.es>,sales@titaniumerp.net,titaniumerp.net@gmail.com';
	//$to = 'PROSSEA <design@prossea.com>,sales@titaniumerp.net';
    $subject = 'CAMPANIA SIMS'; 

    $body = "Nombre: $name\n Apellido: $lastname\n Empresa: $empresa\n Correo de la persona: $email\n Telefono: $phone\n Mensaje:\n $message ";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoSims.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>