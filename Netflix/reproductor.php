<?php
    require_once("Video.class.php");
    require_once("VideoStream.class.php");
    require_once("AccesoVideos.class.php");

    session_cache_limiter('nocache');
    session_start();

  //  echo var_dump($_SESSION);
    if (isset($_SESSION['validado'])){
        //$_SESSION['validado']=uniqid();
//        echo $_SESSION['validado'];
    }

  //  $cod_video = $_POST['codigo'];
   // $nombre = $_SESSION['nombre'];
   // $bd=new AccesoVideos();
    //$usuario->$cods_perfil;
  //  $videoInfo=$bd->getVideo($cod_video);
   // echo var_dump($videoInfo);
    
   // $direccion = $videoInfo->video;

    $ruta=$_GET["v"];
  $video=new VideoStream("../../recursos/videos/$ruta");
//    echo $direccion;
    
    $video->start();
    //echo $ruta;




/*require_once("Video.class.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");
require_once("Usuario.class.php");

$cod_video = $_POST['codigo'];

$nombre = $_SESSION['nombre'];


$bd=new AccesoVideos();

$videoInfo=$bd->getVideo($cod_video);

echo var_dump($videoInfo);



$pantalla=new Pantalla("../../pantallas/Netflix");

$parametros=array('nombre' => $nombre,'video'=>$videoInfo);

$pantalla->mostrar("informacion.tpl",$parametros);*/
?>
