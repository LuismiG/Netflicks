<?php
require_once("Video.class.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");
require_once("Usuario.class.php");

session_cache_limiter('nocache');
session_start();

echo var_dump($_SESSION);
if (isset($_SESSION['validado'])){
	//$_SESSION['validado']=uniqid();
    echo $_SESSION['validado'];
}

$mensaje="";
if (isset($_GET['mensaje'])){
	$mensaje=trim(strip_tags($_GET['mensaje']));
}

$cods_perfil = $_SESSION['cods_perfil'];
$nombre = $_SESSION['nombre'];
//$videosOrdenados = AccesoVideos::getVideosOrden($cods_perfil);
//$_SESSION['videos'] = serialize($videosOrdenados);
// Recuperar datos que se muestran en la pantalla

$bd=new AccesoVideos();
//$usuario->$cods_perfil;
$videosOrdenados=$bd->getVideosOrden($cods_perfil);

echo var_dump($videosOrdenados);


//Mostrar pantalla con los datos

$pantalla=new Pantalla("../../pantallas/Netflix");

$parametros=array('nombre' => $nombre,'videos'=>$videosOrdenados);

$pantalla->mostrar("ordenarA.tpl",$parametros);

?>