<?php
date_default_timezone_set('America/Mexico_City');
const PRODUCCION = false;
const LIBS = "src/Libreries/Core/";
const VIEWS = "Views";

if (PRODUCCION) {
    define('BASE_URL', "https://fly-select.com/vuelos-al-caribe");
    define('DB_HOST', "localhost");
    define('DB_NAME', "flyselec_proyect_mvc");
    define('DB_USER', "flyselec_hotaruv");
    define('DB_PASSWORD', "LCzY60+]vsb6");
    define('DB_CHARSET', "utf8");
}else{
    define('BASE_URL', "http://localhost/drop");
    define('DB_HOST', "70.32.23.81");
    define('DB_NAME', "flyselec_proyect_mvc");
    define('DB_USER', "flyselec_hotaruv");
    define('DB_PASSWORD', "LCzY60+]vsb6");
    define('DB_CHARSET', "utf8");
}
const SPD = "."; //separador de decimales
const SPM = ","; //separador de Millares
const SMONEY = "$"; //Simbolo de moneda