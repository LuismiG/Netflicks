<?php
include "../../seguridad/Netflix/funciones.php";
inicioSesion();
session_destroy();
$_SESSION['validado']=false;
unset($_SESSION);

header("Location: login.php");
exit;
?>