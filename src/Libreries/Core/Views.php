<?php

class Views{
    function getView($controller, $view){
        $controller = get_class($controller);
        if ($controller == "Home") {
            $view = 'views/' . $view . ".php";
        } else {
            $view = 'views/' . $controller . "/" . $view . ".php";
        }
        require_once($view);
    }
}