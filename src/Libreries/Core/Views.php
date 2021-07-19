<?php

class Views{
    function getView($controller, $view){
        $controller = get_class($controller);
        if ($controller == "HomeController") {
            $view = 'views/' . $view . ".php";
        } else {
            $view = 'views/' . $controller . "/" . $view . ".php";
        }
        require_once($view);
    }
}