<?php
date_default_timezone_set('America/Mexico_City');
const PRODUCCION = false;
const LIBS = "./Libreries";
const VIEWS = "../views";

if (PRODUCCION) {
    define('BASE_URL', "");
    define('DB_HOST', "");
    define('DB_NAME', "");
    define('DB_USER', "");
    define('DB_PASSWORD', "");
    define('DB_CHARSET', "utf8");
}else{
    define('BASE_URL', "http://localhost/drops__framework/original_framework/");
    define('DB_HOST', "localhost");
    define('DB_NAME', "temporal1");
    define('DB_USER', "root");
    define('DB_PASSWORD', "");
    define('DB_CHARSET', "utf8");
}
const SPD = "."; //separador de decimales
const SPM = ","; //separador de Millares
const SMONEY = "$"; //Simbolo de moneda