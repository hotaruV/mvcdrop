<?php
require_once './src/Config/config.php';
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if(!empty($arrUrl[1])){
    if($arrUrl[1] != ''){
        $method = $arrUrl[1];
    }
}

if(!empty($arrUrl[2])){
    if($arrUrl[2] != ""){
        for($i = 2; $i < count($arrUrl); $i++){
            $params .= $arrUrl[$i].','; 
        }
        $params = trim($params, ',');
    }
}

spl_autoload_register(function($class){
    if(file_exists('src/Libreries/Core/'.$class.".php")){
        require_once('src/Libreries/Core/'.$class.".php");
    }
});

$controllerFile = "app/Controllers/".$controller."Controller.php";
if(file_exists($controllerFile)){ 
    require_once($controllerFile);
    $controller = new $controller;
    if(method_exists($controller, $method)){
        $controller->{$method}($params);
    }else{
        echo "no existe metodo we";
    }
}else{
    echo "no existe controlador we";
}



