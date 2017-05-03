<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: PAGINA WEB PROSSEA'; 
	$to = 'PROSSEA<rob_cal_sam@outlook.es>,sales@titaniumerp.net,titaniumerp.net@gmail.com';
	//$to = 'PROSSEA <design@prossea.com>';
    $subject = $_POST['subject']; 

    $body = "Nombre: $name\n Correo de la persona: $email\n Telefono: $phone\n Mensaje:\n $message ";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoContacto.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>