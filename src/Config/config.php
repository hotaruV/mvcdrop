<?php
date_default_timezone_set('America/Mexico_City');
const PRODUCCION = false;
const LIBS = "src/Libreries/Core/";
const VIEWS = "Views";

if (PRODUCCION) {
    define('BASE_URL', "");
    define('DB_HOST', "localhost");
    define('DB_NAME', "u784873018_proyect_mvc");
    define('DB_USER', "u784873018_hotaruV");
    define('DB_PASSWORD', "Lu~d?>d2&");
    define('DB_CHARSET', "utf8");
}else{
    define('BASE_URL', "http://localhost/drop");
    define('DB_HOST', "localhost");
    define('DB_NAME', "proyect_mvc");
    define('DB_USER', "root");
    define('DB_PASSWORD', "");
    define('DB_CHARSET', "utf8");
}
const SPD = "."; //separador de decimales
const SPM = ","; //separador de Millares
const SMONEY = "$"; //Simbolo de moneda