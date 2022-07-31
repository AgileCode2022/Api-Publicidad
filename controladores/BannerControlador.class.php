<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-Publicidad/utils/autoload.php"; 
    class BannerControlador{

        public static function ObtenerPublicidad(){
          $u = new BannerModelo();
          $u -> ObtenerPublicidad();  
        }

        public static function EnviarImgenesJson(){
            $banner = new BannerModelo();
            $imagenes = $banner -> ObtenerPublicidad();
            header('Content-Type: application/json');
            echo json_encode($imagenes);
        }
    }