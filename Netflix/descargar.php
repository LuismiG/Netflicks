<?php
require_once("Video.class.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");

session_cache_limiter('nocache');
session_start();

echo var_dump($_SESSION);
if (isset($_SESSION['validado'])){
	//$_SESSION['validado']=uniqid();
    echo $_SESSION['validado'];
}

$codVideo = $_POST['codigo'];

$bd=new AccesoVideos();
$videoInfo=$bd->getVideo($codVideo);

echo var_dump($videoInfo);

$direccion = $videoInfo->video;


$fichero= $codVideo;
echo $direccion;


$zip = new ZipArchive();
 
$zip->open($fichero,ZIPARCHIVE::CREATE);
if(file_exists("../../recursos/videos/$direccion")) {
    $zip->addFile("../../recursos/videos/$direccion");
} else {
    echo "<script type='text/javascript'> alert('Error al procesar la descarga.'); window.location.href='informacion.php'; </script>";
}
$zip->close();
header("Content-disposition: attachment; filename=video$fichero.zip");
header("Content-type: application/zip, application/octet-stream");
readfile($fichero);
?>

