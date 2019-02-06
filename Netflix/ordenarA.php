<?php
require_once("Video.class.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");
require_once("Usuario.class.php");

session_cache_limiter('nocache');
session_start();
if (!isset($_SESSION['variable'])){
	$_SESSION['variable']=uniqid();
}
$mensaje="";
if (isset($_GET['mensaje'])){
	$mensaje=trim(strip_tags($_GET['mensaje']));
}

$usuario = $_SESSION['usuario'];
$videosOrdenados = AccesoVideos::getVideosOrden($usuario->cods_perfil);
$_SESSION['videos'] = serialize($videosOrdenados);
// Recuperar datos que se muestran en la pantalla
/*
$bd=new AccesoVideos();
$usuario->$cods_perfil;
$videos=$bd->getVideosOrden($cods_perfil);
*/

//Mostrar pantalla con los datos

$pantalla=new Pantalla("../../pantallas/Netflix");

$parametros=array('nombre' => $usuario->nombre,'videos'=>$videosOrdenados);

$pantalla->mostrar("ordenarA.tpl",$parametros);

?>