<?php
    $from = 'From: PAGINA WEB PROSSEA';
	$to = 'PROSSEA <design@prossea.com> , sales@prossea.com';
	//$to = 'design@prossea.com';
	
	
	$name = $_POST['name'];
	$apellido = $_POST['apellido'];
	$pais = $_POST['pais'];
	$ciudad = $_POST['ciudad'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
	$ent = $_POST['ent'];
	$message = $_POST['message'];
																	       
																		  
    $eq1 = $_POST['pro3000']; //PRO3000 
	$eq2 = $_POST['gtracker']; //GT TRACKER 
	$eq3 = $_POST['pro900']; //PRO 900 
	$eq4 = $_POST['proBasic']; //PRO BASIC 
	$eq5 = $_POST['pro00']; //PRO 700 
	$eq6 = $_POST['Mtracker']; //MT TRACKER 
	$eq7 = $_POST['pro327']; //PRO 327 
	$eq8 = $_POST['AntiGsm']; //ANTI-GSM JAMMER   
	$eq9 = $_POST['hibrictrack']; //HYBRID TRACK 1.0 
	$eq10 = $_POST['Gvtracker']; //GV TRACKER 
	$eq11 = $_POST['dvr30']; //DVR 3.0 
	$eq12 = $_POST['mototracker']; //MOTO TRACK 
	$eq13 = $_POST['kontriversa']; //KONTI TRACK VERSA 
	$eq14 = $_POST['kontitrackk']; //KONTI TRACK 
	$eq15 = $_POST['pro800']; //PRO 800 
	
    $eq16 = $_POST['gv3g']; //GV TRACKER 3G
	$eq17 = $_POST['qtrack3g']; //Q-TRACKER 3G
	$eq18 = $_POST['pro8003g']; //PRO 800 3G
																
    $eq19 = $_POST['kontrack2']; //KONTTI TRACK 2
	$eq20 = $_POST['kontrack3']; //KONTTI TRACK 3
	$eq21 = $_POST['prolock']; //PRO LOCK
															
    $eq22 = $_POST['glpocket20']; //GL POCKET 2.0
	$eq23 = $_POST['gtpocket']; //GT-POCKET
	$eq24 = $_POST['stealtglpo']; //STEALTH GL-POCKET
	$eq40 = $_POST['protel400']; //PROTEL400
	$eq41 = $_POST['sos201']; //SOS201
	$eq42 = $_POST['sos202']; //SOS202
	$eq43 = $_POST['brt100']; //BTR-100
																	
	$eq25 = $_POST['camara1']; //CAMARA TRASERA
	$eq26 = $_POST['camara2']; //CAMARA DOMO
	$eq27 = $_POST['camara3']; //CAMARA INFRARROJA
	$eq28 = $_POST['cableExt']; //CABLE DE EXTENSION
	$eq29 = $_POST['GPSreceptor']; //GPS RECEPTOR
	$eq30 = $_POST['fuente']; //FUENTE RESPALDO ALIMENTACION
	$eq31 = $_POST['ultrasonic']; //ULTRASONIC FUEL SENSOR
	$eq32 = $_POST['fuselSensor']; //FUEL SENSOR GX 2.5
	$eq33 = $_POST['cajaBateria']; //CAJA DE BATERIA PARA DISP. POCKET
	$eq34 = $_POST['cargador1']; //CARGADOR DE BATERIA PARA KONTTI TRACK
	$eq35 = $_POST['cargador2']; //CARGADOR MAGNETICO PARA EQUIPO GL
	$eq36 = $_POST['cablePro']; //CABLE PROGRAMADOR GL POCKET
	$eq37 = $_POST['panico']; //BOTON PANICO
	$eq38 = $_POST['pro7y8']; //CABLE PROGRAMADOR 700 y 800
	$eq39 = $_POST['relay']; //RELEVADOR RELAY
	
    
	
	
	
$t1="";	$t2="";	$t3="";	$t4="";$t5="";$t6="";$t7="";$t8="";$t9="";$t10="";$t11="";$t12="";$t13="";$t14="";$t15="";$t16="";$t17="";$t18="";$t19="";$t20="";$t21="";$t22="";$t23="";$t24="";$t25="";$t26="";$t27="";$t28="";$t29="";$t30="";$t31="";$t32="";$t33="";$t34="";$t35="";$t36="";$t37="";$t38="";$t39="";$t40="";$t41="";$t42="";$t43="";											

if ($eq1 > 0) {
    $t1 = 'PRO3000: '.$eq1." /";
	$body = $t1;
}if ($eq2 > 0) {
    $t2 = 'GT TRACKER: '.$eq2." /";
}if ($eq3 > 0) {
    $t3 = 'PRO 900: '.$eq3." /";
}if ($eq4 > 0) {
    $t4 = 'PRO BASIC: '.$eq4." /";
}if ($eq5 > 0) {
    $t5 = 'PRO 700 : '.$eq5." /";
}if ($eq6 > 0) {
    $t6 = 'MT TRACKER: '.$eq6." /";
}if ($eq7 > 0) {
    $t7 = 'PRO 327 : '.$eq7." /";
}if ($eq8 > 0) {
    $t8 = 'ANTI-GSM JAMMER : '.$eq8." /";
}if ($eq9 > 0) {
    $t9 = 'HYBRID TRACK 1.0 : '.$eq9." /";
}if ($eq10 > 0) {
    $t10 = 'GV TRACKER : '.$eq10." /";
}if ($eq11 > 0) {
    $t11 = 'DVR 3.0 : '.$eq11." /";
}if ($eq12 > 0) {
    $t12 = 'MOTO TRACK : '.$eq12." /";
}if ($eq13 > 0) {
    $t13 = 'KONTI TRACK VERSA : '.$eq13." /";
}if ($eq14 > 0) {
    $t14 = 'KONTI TRACK : '.$eq14." /";
}if ($eq15 > 0) {
    $t15 = 'PRO 800 : '.$eq15." /";
}

if ($eq16 > 0) {
    $t16 = 'GV TRACKER 3G : '.$eq16." /";
}if ($eq17 > 0) {
    $t17 = 'PROTEL 362 3G : '.$eq17." /";
}if ($eq18 > 0) {
    $t18 = 'PRO 800 3G : '.$eq18." /";
}

if ($eq19 > 0) {
    $t19 = 'KONTTI TRACK II : '.$eq19." /";
}if ($eq20 > 0) {
    $t20 = 'KONTTI TRACK III : '.$eq20." /";
}if ($eq21 > 0) {
    $t21 = 'PRO LOCK : '.$eq21." /";
}


	
if ($eq22 > 0) {
    $t22 = 'GL POCKET 2.0 : '.$eq22." /";
}if ($eq23 > 0) {
    $t23 = 'GT-POCKET : '.$eq23." /";
}if ($eq24 > 0) {
    $t24 = 'STEALTH GL-POCKET : '.$eq24." /";
}if ($eq40 > 0) {
    $t40 = 'PROTEL400 : '.$eq40." /";
}if ($eq41 > 0) {
    $t41 = 'SOS201 : '.$eq41." /";
}if ($eq42 > 0) {
    $t42 = 'SOS202 : '.$eq42." /";
}if ($eq43 > 0) {
    $t43 = 'BTR-100 : '.$eq43." /";
}


		

if ($eq25 > 0) {
    $t25 = 'CAMARA TRASERA : '.$eq25." /";
}if ($eq26 > 0) {
    $t26 = 'CAMARA DOMO : '.$eq26." /";
}if ($eq27 > 0) {
    $t27 = 'CAMARA INFRARROJA : '.$eq27." /";
}if ($eq28 > 0) {
    $t28 = 'CABLE DE EXTENSION : '.$eq28." /";
}if ($eq29 > 0) {
    $t29 = 'GPS RECEPTOR : '.$eq29." /";
}if ($eq30 > 0) {
    $t30 = 'FUENTE RESPALDO ALIMENTACION : '.$eq30." /";
}if ($eq31 > 0) {
    $t31 = 'ULTRASONIC FUEL SENSOR : '.$eq31." /";
}if ($eq32 > 0) {
    $t32 = 'FUEL SENSOR GX 2.5 : '.$eq32." /";
}if ($eq33 > 0) {
    $t33 = 'CAJA DE BATERIA PARA DISP. POCKET : '.$eq33." /";
}if ($eq34 > 0) {
    $t34 = 'CARGADOR DE BATERIA PARA KONTTI TRACK : '.$eq34." /";
}if ($eq35 > 0) {
    $t35 = 'CARGADOR MAGNETICO PARA EQUIPO GL : '.$eq35." /";
}if ($eq36 > 0) {
    $t36 = 'CABLE PROGRAMADOR GL POCKET : '.$eq36." /";
}if ($eq37 > 0) {
    $t37 = 'BOTON PANICO : '.$eq37." /";
}if ($eq38 > 0) {
    $t38 = 'CABLE PROGRAMADOR 700 y 800 : '.$eq38." /";
}if ($eq39 > 0) {
    $t39 = 'RELEVADOR RELAY : '.$eq39." /";
}	


//PLNES DE SIMS
	
	$cant1 = $_POST['cant1'];
	$plann1 = $_POST['mega1'];
	
	$cant2 = $_POST['cant2'];
	$plann2 = $_POST['mega2'];
	
	$cant3 = $_POST['cant3'];
	
	$cant4 = $_POST['cant4'];
	$plann4 = $_POST['mega4'];
	
	$cant5 = $_POST['cant5'];
	$plann5 = $_POST['mega5'];
	
	$cant6 = $_POST['cant6'];
	$plann6 = $_POST['mega6'];

	

		
$subject = "Cotizacion Equipos";
$body = "Nombre: $name\n Apellido: $apellido\n Telefono: $tel\n Correo de la persona: $email\n Pais: $pais\n Ciudad y Estado: $ciudad\n\n EQUIPOS AVL:\n  $t1  $t2  $t3  $t4  $t5  $t6  $t7  $t8  $t9  $t10  $t11  $t12  $t13  $t14  $t15\n\n EQUIPOS 3GS:\n$t16  $t17  $t18\n\n CANDADOS:\n$t19  $t20  $t21\n\n DISP. PERSONALES:\n$t22  $t23  $t24  $t40  $t41  $t42  $t43\n\n ACCESORIOS:\n$t25  $t26  $t27  $t28  $t29  $t30  $t31  $t32  $t33  $t34  $t35  $t36  $t37  $t38  $t39\n\nPLANES SIM's:\n\n-Pool bytes:\n $cant1 sims / $plann1 \n\n -NOn-Net Bundle:\n $cant2 sims / $plann2 \n\n -NOn-Net Extendida:\n $cant6 sims / $plann6\n\n -Plan libre:\n $cant3 sims\n\n-Plan basico:\n $cant4 sims / $plann4\n\n -Plan Extendido:\n $cant5 sims / $plann5 \n\nSe entero por: $ent\nComentario Extra:\n$message";




	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {  
	
       header("Location:gracias.html");
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>