<?php
$dni="";

if (!isset($_POST['dni'])){
	header("Location: login.php");
	exit;
}
$dni=strip_tags(trim($_POST['dni']));
$clave="";
if (!isset($_POST['clave'])){
	header("Location: login.php");
	exit;
}
$clave=strip_tags(trim($_POST['clave']));
if (empty($dni) || strlen($dni)>20 || empty($clave) || strlen($clave)>20){
	header("Location: login.php?mensaje=".urlencode("DNI inexistente o clave no reconocida"));
	exit;
}
$canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
if ($canal->connect_errno){
	die("Error de conexión con la base de datos ");
	}
$canal->set_charset("utf8");
/////////////
$consulta=$canal->prepare("select dni,nombre,clave from usuarios where dni=?");
$consulta->bind_param("s",$ddni);
$ddni=$dni;
$consulta->execute();
$consulta->bind_result($dniBD,$nombreDB,$claveDB);
$consulta->fetch();
////////////    
    if (!password_verify($clave, $claveBD)) {
         echo "<script type='text/javascript'> alert('Datos incorrectos.'); window.location.href='login.php'; </script>";
       
	    exit;
    }


//Se inicia sesión
session_name("SESION");
session_cache_limiter('nocache');
session_start();

//Datos básicos del usuario (secretos)
$_SESSION['validado']=true;
$_SESSION['dni']=$dni;


$consulta->close();
$consulta->unset();
$canal->close();
 
?>