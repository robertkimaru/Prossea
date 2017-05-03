<?php
if(isset($_POST['submit'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
		//your site secret key
        $secretKey = "6LctMhEUAAAAAB5cP_X3SzVqwvMXYQ-MgdQWfAQF";
		//get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
		
		 $name = $_POST['name'];
    	 $email = $_POST['email'];
   		 $message = $_POST['message']; 
	
        if($responseData->success):
			//contact form submission code
			$to = 'PROSSEA <design@prossea.com>';
			$subject = 'Contacto prossea';
			$htmlContent = "
				<h1>Contact request details</h1>
				<p><b>Name: </b>".$name."</p>
				<p><b>Email: </b>".$email."</p>
				<p><b>Message: </b>".$message."</p>
			";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From:PAGINA WEB PROSSEA'."\r\n";
			//send email
			@mail($to,$subject,$htmlContent,$headers);
            $succMsg = "Location:EnviadoContacto.html";
			$name = '';
			$email = '';
			$message = '';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
	$name = '';
	$email = '';
	$message = '';
endif;
?>