<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pais = $_POST['pais'];
	$phone = $_POST['phone'];
	$proin = $_POST['proin'];
    $from = 'From: PAGINA WEB PROSSEA'; 
	$to = 'PROSSEA<rob_cal_sam@outlook.es>,sales@titaniumerp.net,titaniumerp.net@gmail.com';
	//$to = 'PROSSEA <design@prossea.com>';
    $subject = 'Distribuidores'; 

    $body = "Nombre: $name\n Correo de la persona: $email\n Pais y Estado: $pais\n Telefono: $phone\n Producto de interes: $proin ";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoDistribuidor.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>