<?php 
require_once("../../seguridad/Netflix/videosBD.class.php");
class AccesoVideos {
	

	public function getVideo($codigo){
		$canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ");
		}
		$canal->set_charset("utf8");
		$consulta=$canal->prepare("select * from videos where codigo=?");
		$consulta->bind_param("s",$cod);
		$cod=$codigo;
		$consulta->execute();
		$consulta->bind_result($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigo_perfil,$ssinopsis,$vvideo);
		$consulta->store_result();
		
		if ($consulta->num_rows!=1){
			$canal->close();
			return null;
		}
		$consulta->fetch();
		$canal->close();
		return new Video($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigo_perfil,$ssinopsis,$vvideo);
	}
	
	public function getVideos(){
		$canal=new mysqli(VideosBD::IP, VideosBD::USUARIO, VideosBD::CLAVE, VideosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ".$canal->connect_error);
		}
		$canal->set_charset("utf8");
		
		$consulta=$canal->prepare("select * from videos");
		$consulta->execute();
		$consulta->bind_result($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigo_perfil,$ssinopsis,$vvideo);
		$videos=array();
		while ($consulta->fetch()){
			array_push($videos,new Video($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigo_perfil,$ssinopsis,$vvideo));
		}
		$canal->close();
		return $videos;
	}
	
	
}
?>