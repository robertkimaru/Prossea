
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: PAGINA WEB PROSSEA'; 
	$to = 'PROSSEA <design@prossea.com>';
    $subject = $_POST['subject'];

    $body = "Nombre: $name\n Correo de la persona: $email\n Mensaje:\n $message";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoContacto.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>