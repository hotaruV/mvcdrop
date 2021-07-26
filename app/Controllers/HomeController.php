<?php

class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
        //Utils::loginSession();
    }
    public function home()
    {

        $paises = $this->model->getPaises();
        $destinos = $this->model->getDestinos();
        $data = [
            "tag_pages" => 'Fly Select | Vuelos Privados',
            "pages_title" => 'Bienvenido a tu próximo destino',
            "pages_name" => 'Fly Select | Vuelos Privados',
            'pages_function_js' => 'home_functions.js',
            "paises" => $paises,
            "destinos" => $destinos

        ];
        $this->views->getView($this, 'home', $data);
    }

    public function destinos(){
        
    }
}
