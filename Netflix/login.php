<?php
require_once("Pantalla.class.php");


/*
include "../../seguridad/Netflix/funciones.php";
inicioSesion();
if (validado($dni)){
    echo "<script type='text/javascript'> alert('Por favor, cierre la sesión primero.'); window.location.href='formularioSubida.php'; </script>";
    exit;
}
*/

if(isset($_GET['mensaje'])){
	echo "<span style='color:red;'>".$_GET['mensaje']."</span>";
}


$pantalla=new Pantalla("../../pantallas/Netflix");
$pantalla->mostrar("login.tpl", array());
?>

<?php
