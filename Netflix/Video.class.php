<?php
class Video {
	private $codigo;
	private $baja;
	private $alta;
	private $descripcion;
	private $precio;
	
	public function __construct($codigo,$titulo,$cartel,$descargable,$codigo_perfil,$sinpsis,$video){
		$this->codigo=$codigo;
		$this->titulo=$titulo;
		$this->cartel=$cartel;
		$this->descargable=$descargable;
		$this->codigo_perfil=$codigo_perfil;
		$this->sinopsis=$sinopsis;
		$this->video=$video;
	}

	public function __get($atributo){
		
		if (isset($this->$atributo)){
			return $this->$atributo;
		}else{
			return null;
		}
			
	}
	
}
?>