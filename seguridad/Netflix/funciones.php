<?php
function inicioSesion(){
	session_name("SESION");
	session_cache_limiter('nocache');
	session_start();
}

function validado(&$dni){
	$validado=false;
	if (isset($_SESSION['validado']) && $_SESSION['validado']){
		$validado=true;
		$dni=$_SESSION['dni'];
	}
	return $validado;
}

?>