<?php
require_once("Video.class.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");

session_cache_limiter('nocache');
session_start();
echo " -- ".$_SESSION['validado']." ---------------------";
if (isset($_SESSION['validado']) && $_SESSION['validado']){
	echo "Esta validado";
} else {
    header("Location:login.php"); exit;
}
$mensaje="";
if (isset($_GET['mensaje'])){
	$mensaje=trim(strip_tags($_GET['mensaje']));
}

// Recuperar datos que se muestran en la pantalla
$bd=new AccesoVideos();
$videos=$bd->getVideos();

//Mostrar pantalla con los datos

$pantalla=new Pantalla("../../pantallas/Netflix");

$parametros=array('videos' => $videos,'mensaje'=>$mensaje);

$pantalla->mostrar("index.tpl",$parametros);

?>
