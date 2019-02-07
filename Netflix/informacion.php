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

$cod_video = $_POST['codigo'];

//$cods_perfil = $_SESSION['cods_perfil'];
$nombre = $_SESSION['nombre'];
//$videosOrdenados = AccesoVideos::getVideosOrden($cods_perfil);
//$_SESSION['videos'] = serialize($videosOrdenados);
// Recuperar datos que se muestran en la pantalla

$bd=new AccesoVideos();
//$usuario->$cods_perfil;
$videoInfo=$bd->getVideo($cod_video);

echo var_dump($videoInfo);


$descargable = $videoInfo->descargable;
echo $descargable;
$ruta = $videoInfo->video;



//Mostrar pantalla con los datos

$pantalla=new Pantalla("../../pantallas/Netflix");

$parametros=array('descargable' => $descargable,'video'=>$videoInfo, 'ruta'=>$ruta);

$pantalla->mostrar("informacion.tpl",$parametros);

?>