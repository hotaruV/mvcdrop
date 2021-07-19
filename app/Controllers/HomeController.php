<?php

class Home extends Controllers{
    public function __construct(){
       parent::__construct();
    }
    public function home(){
        echo "Hola Chango";
    }
    public function saludar($params){
        echo "Saludo numero: ". $params;
    }
    
}