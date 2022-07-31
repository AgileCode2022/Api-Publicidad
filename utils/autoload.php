<?php

    sql_autoload_register(function($clase){
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-Publicidad/modelos/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-Publicidad/modelos/$clase.class.php";
        }
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-Publicidad/controladores/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-Publicidad/controladores/$clase.class.php";
        }
    });

    require_once $_SERVER['DOCUMENT_ROOT'] . "/Api-Publicidad/config.php"