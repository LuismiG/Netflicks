<?php
    class Usuario {
        private $dni;
        private $nombre;
        private $validado;
        private $codigosPerfiles;
        
        public function __construct($dni, $nombre, $cods_perfil) {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->validado = true;
            $this->cods_perfil = $cods_perfil;          
        }
        
        /*public function __get($atributo) {
            if (isset($this->$atributo)) {
                return $this->$atributo;
            } else {
                return null;
            }
        }*/
    }
?>