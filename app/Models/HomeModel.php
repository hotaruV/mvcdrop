<?php
class homeModel{
    public function __construct(){
        echo "a webo estoy obteniendo un mensaje desde el modelo <br>";
        echo "Aleluya<br>";
    }
    public function getCarrito($params){
        return "Datos del Carrito no ". $params;
    }
}