<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Publicidad/utils/autoload.php"; 
    class BannerModelo extends modelo{
        public $Id;
        public $Nombre;
        public $Imagen;
        public $Url;

        public function ObtenerPublicidad(){
            $query="SELECT * FROM Banner";
            $filas = $this -> conexion -> query($query) -> fetch_all(MYSQLI_ASSOC);
    
            $elementos = [];
                foreach($filas as $fila){
                    $u = new BannerControlador();
                    $u -> Id = $fila['id'];
                    $u -> Nombre = $fila['nombre'];
                    $u -> Imagen = $fila['imagen'];
                    $u -> Url = $fila['url'];
                    array_push($elementos, $u);
                }
              return  var_dump($elementos);  
        }

    }