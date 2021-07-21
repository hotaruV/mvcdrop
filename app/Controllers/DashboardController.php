<?php
class Dashboard extends Controllers {
    public function __construct()
    {
        parent::__construct();
        Utils::loginSession();
    }

    public function dashboard(){
        $data = [
            "pages_id" => 1,
            "tag_tag" => 'Panel de Administración',
            "tag_pages" => 'Panel de Administración',
            "pages_title" => 'Bienvenido a tu próximo destino',
            "panel_option" => 'Inicio'
        ];
        $this->views->getView($this, 'index', $data);
    }
}