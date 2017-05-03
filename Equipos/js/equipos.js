

$(document).ready(inicio);

function inicio(){
	$("#caracte").click(onMuestra);
	$("#caracte").css("cursor","pointer");/* para que aparesca la manita y que se identifique que es un boton*/

	$("#accesorios").click(onMuestraCandado);
	$("#accesorios").css("cursor","pointer");
	
	$("#video").click(onVideo);
	$("#video").css("cursor","pointer");
	
	$("#audio").click(onAudio);
	$("#audio").css("cursor","pointer");
	
	$("#inter").click(onInter);
	$("#inter").css("cursor","pointer");
	
	$("#ghgh").click(onMuestra2);
	$("#ghgh").css("cursor","pointer");
	
	$("#espf").click(onEspf);
	$("#espf").css("cursor","pointer");
}



function onMuestra(){
	$("#afrodita2").slideToggle("slow");
	/*$("#afrodita").slideDown("slow");
	$("#afrodita").slideUp("slow");*/
}

	function onMuestraCandado(){
	$("#afrodita").slideToggle("slow");
	/*$("#afrodita").slideDown("slow");
	$("#afrodita").slideUp("slow");*/
}

function onVideo(){
	$("#videom").slideToggle("slow");
	/*$("#afrodita").slideDown("slow");
	$("#afrodita").slideUp("slow");*/
}

function onAudio(){
	$("#audiom").slideToggle("slow");
	/*$("#afrodita").slideDown("slow");
	$("#afrodita").slideUp("slow");*/
}

function onInter(){
	$("#interm").slideToggle("slow");
	/*$("#afrodita").slideDown("slow");
	$("#afrodita").slideUp("slow");*/
}

function onMuestra2(){
	$("#tttt").slideToggle("slow");
	/*$("#afrodita").slideDown("slow");
	$("#afrodita").slideUp("slow");*/
}

function onEspf(){
	$("#esp2").slideToggle("slow");
	/*$("#afrodita").slideDown("slow");
	$("#afrodita").slideUp("slow");*/
}


