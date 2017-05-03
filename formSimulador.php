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
																	       
																		  
    //AVL
	$eq1 = $_POST['LMU3000']; //LMU3000
	$eq2 = $_POST['LMU1100']; //LMU1100
	$eq3 = $_POST['LMU327']; //LMU327
	$eq4 = $_POST['LMU800']; //LMU800
	$eq5 = $_POST['TTU1200']; //TTU1200 
	$eq6 = $_POST['GT06N']; //GT06N
	$eq7 = $_POST['GT100']; //GT100
	$eq8 = $_POST['FM1120']; //FM1120  
	$eq9 = $_POST['FM1202']; //FM1202
	$eq10 = $_POST['FM5300']; //FM5300
	$eq11 = $_POST['LVCAN200']; //LVCAN200
	$eq12 = $_POST['RUT950']; //RUT950
	$eq13 = $_POST['FM1000ST']; //FM1000ST
	$eq14 = $_POST['ALLCAN300']; //ALLCAN300
	$eq15 = $_POST['AT2000']; //AT2000
	$eq44 = $_POST['LX3504']; //LX3504
	$eq45 = $_POST['GV300']; //GV300
	
	//3G
    $eq16 = $_POST['LMU820']; //LMU820
	$eq17 = $_POST['GT06E']; //GT06E
	$eq18 = $_POST['FM3620']; //FM3620
	$eq46 = $_POST['FM6320']; //FM6320
	$eq47 = $_POST['GV300W']; //GV300W
	$eq48 = $_POST['MT200X']; //MT200X
	
	//CANDADOS													
    $eq19 = $_POST['TTU700']; //TTU700
	$eq20 = $_POST['Container']; //Container Lock
	$eq21 = $_POST['WatchLock']; //WatchLock
	
	//PERSONALES															
    $eq22 = $_POST['GT300']; //GT300
	$eq23 = $_POST['PG88']; //PG88
	$eq24 = $_POST['TV680']; //TV680
	$eq40 = $_POST['MT100']; //MT100
	$eq41 = $_POST['MT60X']; //MT60X
	$eq42 = $_POST['TT8850']; //TT8850
	$eq43 = $_POST['GH4000']; //GH4000
	$eq49 = $_POST['TL201']; //TL201
	$eq50 = $_POST['TL202']; //TL202
	$eq51 = $_POST['TL007']; //TL007
	$eq52 = $_POST['TL601']; //TL601
	
	//ACCESORIOS																
	$eq25 = $_POST['sensorcomb']; //Sensor Combustible
	$eq26 = $_POST['camara2']; //CAMARA DOMO
	$eq27 = $_POST['camara3']; //CAMARA INFRARROJA
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
	$eq28 = $_POST['relay']; //RELEVADOR RELAY
	
    
	
	
	
$t1="";	$t2="";	$t3="";	$t4="";$t5="";$t6="";$t7="";$t8="";$t9="";$t10="";$t11="";$t12="";$t13="";$t14="";$t15="";$t16="";$t17="";$t18="";$t19="";$t20="";$t21="";$t22="";$t23="";$t24="";$t25="";$t26="";$t27="";$t28="";$t29="";$t30="";$t31="";$t32="";$t33="";$t34="";$t35="";$t36="";$t37="";$t38="";$t39="";$t40="";$t41="";$t42="";$t43="";$t44="";$t45="";$t46="";$t47="";$t48="";$t49="";$t50="";$t51="";$t52="";											


//AVL
if ($eq1 > 0) {
    $t1 = 'LMU3000: '.$eq1." /";
	$body = $t1;
}if ($eq2 > 0) {
    $t2 = 'LMU1100: '.$eq2." /";
}if ($eq3 > 0) {
    $t3 = 'LMU327: '.$eq3." /";
}if ($eq4 > 0) {
    $t4 = 'LMU800: '.$eq4." /";
}if ($eq5 > 0) {
    $t5 = 'TTU1200: '.$eq5." /";
}if ($eq6 > 0) {
    $t6 = 'GT06N: '.$eq6." /";
}if ($eq7 > 0) {
    $t7 = 'GT100: '.$eq7." /";
}if ($eq8 > 0) {
    $t8 = 'FM1120: '.$eq8." /";
}if ($eq9 > 0) {
    $t9 = 'FM1202: '.$eq9." /";
}if ($eq10 > 0) {
    $t10 = 'FM5300: '.$eq10." /";
}if ($eq11 > 0) {
    $t11 = 'LVCAN200: '.$eq11." /";
}if ($eq12 > 0) {
    $t12 = 'RUT950: '.$eq12." /";
}if ($eq13 > 0) {
    $t13 = 'FM1000ST: '.$eq13." /";
}if ($eq14 > 0) {
    $t14 = 'ALLCAN300: '.$eq14." /";
}if ($eq15 > 0) {
    $t15 = 'AT2000: '.$eq15." /";
}if ($eq44 > 0) {
    $t44 = 'LX3504: '.$eq44." /";
}if ($eq45 > 0) {
    $t45 = 'GV300: '.$eq45." /";
}


//3G
if ($eq16 > 0) {
    $t16 = 'LMU820: '.$eq16." /";
}if ($eq17 > 0) {
    $t17 = 'GT06E: '.$eq17." /";
}if ($eq18 > 0) {
    $t18 = 'FM3620: '.$eq18." /";
}if ($eq46 > 0) {
    $t46 = 'FM6320: '.$eq46." /";
}if ($eq47 > 0) {
    $t47 = 'GV300W: '.$eq47." /";
}if ($eq48 > 0) {
    $t48 = 'MT200X: '.$eq48." /";
}



//CANDADOS	
if ($eq19 > 0) {
    $t19 = 'TTU700: '.$eq19." /";
}if ($eq20 > 0) {
    $t20 = 'Container Lock: '.$eq20." /";
}if ($eq21 > 0) {
    $t21 = 'WatchLock: '.$eq21." /";
}


//PERSONALES	
if ($eq22 > 0) {
    $t22 = 'GT300: '.$eq22." /";
}if ($eq23 > 0) {
    $t23 = 'PG88: '.$eq23." /";
}if ($eq24 > 0) {
    $t24 = 'TV680: '.$eq24." /";
}if ($eq40 > 0) {
    $t40 = 'MT100: '.$eq40." /";
}if ($eq41 > 0) {
    $t41 = 'MT60X: '.$eq41." /";
}if ($eq42 > 0) {
    $t42 = 'TT8850: '.$eq42." /";
}if ($eq43 > 0) {
    $t43 = 'GH4000: '.$eq43." /";
}if ($eq49 > 0) {
    $t49 = 'TL201: '.$eq49." /";
}if ($eq50 > 0) {
    $t50 = 'TL202: '.$eq50." /";
}if ($eq51 > 0) {
    $t51 = 'TL007: '.$eq51." /";
}if ($eq52 > 0) {
    $t52 = 'TL601: '.$eq52." /";
}

	
//ACCESORIOS
if ($eq25 > 0) {
    $t25 = 'SENSOR ULTRASONICO DE COMBUSTIBLE: '.$eq25." /";
}if ($eq26 > 0) {
    $t26 = 'CAMARA DOMO: '.$eq26." /";
}if ($eq27 > 0) {
    $t27 = 'CAMARA INFRARROJA: '.$eq27." /";
}if ($eq28 > 0) {
    $t28 = 'RELEVADOR RELAY: '.$eq28." /";
}if ($eq29 > 0) {
    $t29 = 'GPS RECEPTOR: '.$eq29." /";
}if ($eq30 > 0) {
    $t30 = 'FUENTE RESPALDO ALIMENTACION : '.$eq30." /";
}if ($eq31 > 0) {
    $t31 = 'ULTRASONIC FUEL SENSOR : '.$eq31." /";
}if ($eq32 > 0) {
    $t32 = 'FUEL SENSOR GX 2.5 : '.$eq32." /";
}if ($eq33 > 0) {
    $t33 = 'CAJA DE BATERIA PARA DISP. PERSONALES : '.$eq33." /";
}if ($eq34 > 0) {
    $t34 = 'CARGADOR DE BATERIA PARA TTU1200 - Cal Amp : '.$eq34." /";
}if ($eq35 > 0) {
    $t35 = 'CARGADOR MAGNETICO PARA EQUIPO GL : '.$eq35." /";
}if ($eq36 > 0) {
    $t36 = 'CABLE PROGRAMADOR PARA DISPOSITIVOS Queclink : '.$eq36." /";
}if ($eq37 > 0) {
    $t37 = 'BOTON PANICO : '.$eq37." /";
}if ($eq38 > 0) {
    $t38 = 'CABLE PROGRAMADOR PARA LMU-800 Cal Amp : '.$eq38." /";
}if ($eq39 > 0) {
    $t39 = 'RELEVADOR RELAY : '.$eq39." /";
}	


//PLNES DE SIMS
	$cant1 = $_POST['cant1'];
	$plann1 = $_POST['mega1'];
	
	$cant2 = $_POST['cant2'];
	$plann2 = $_POST['mega2'];
	
	$cant3 = $_POST['cant3'];
	$plann3 = $_POST['mega3'];
	
	$cant4 = $_POST['cant4'];
	$plann4 = $_POST['mega4'];
	
	$cant5 = $_POST['cant5'];
	$plann5 = $_POST['mega5'];
	
	$cant6 = $_POST['cant6'];
	$plann6 = $_POST['mega6'];

	

		
$subject = "Cotizacion Equipos";
$body = "Nombre: $name\n Apellido: $apellido\n Telefono: $tel\n Correo de la persona: $email\n Pais: $pais\n Ciudad y Estado: $ciudad\n\n EQUIPOS AVL:\n  $t1  $t2  $t3  $t4  $t5  $t6  $t7  $t8  $t9  $t10  $t11  $t12  $t13  $t14  $t15 $t44 $t45\n\n EQUIPOS 3GS:\n $t16 $t17 $t18 $t46 $t47 $t48\n\n CANDADOS:\n$t19  $t20  $t21\n\n DISP. PERSONALES:\n$t22  $t23  $t24  $t40  $t41  $t42  $t43 $t49 $t50 $t51 $t52\n\n ACCESORIOS:\n$t25  $t26  $t27  $t28  $t29  $t30  $t31  $t32  $t33  $t34  $t35  $t36  $t37  $t38  $t39\n\nPLANES SIM's:\n\n-Pool bytes:\n $cant1 sims / $plann1 \n\n -NOn-Net Bundle:\n $cant2 sims / $plann2 \n\n -NOn-Net Extendida:\n $cant6 sims / $plann6\n\n -Plan libre:\n $cant3 sims  / $plann3\n\n-Plan basico:\n $cant4 sims / $plann4\n\n -Plan Extendido:\n $cant5 sims / $plann5 \n\nSe entero por: $ent\nComentario Extra:\n$message";



	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {  
	
       header("Location:EnviadoCotizacion.html");
	   $men = 'Tu correo se ha enviado correctamente pirrin';
    } else { 
        echo '<p>Oops! An error occurred. Try sending your message again.</p>'; 
    }
}
?>