<?php
class Roles extends Controllers {
    public function __construct()
    {
        parent::__construct();
        Utils::loginSession();
    }

    public function roles(){
        $data = [
            "pages_id" => 3,
            "tag_tag" => 'Roles Usuario',
            "tag_pages" => 'rol usuario',
            "pages_title" => 'Roles Usuario',
            "panel_option" => ''
        ];
        $this->views->getView($this, 'roles', $data);
    }
}