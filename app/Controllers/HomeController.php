<?php

class Home extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }
    public function home()
    {
        $data = [
            "tag_pages" => 'Home',
            "pages_title" => 'Página Principal',
            "pages_name" => 'home'

        ];
        $this->views->getView($this, 'home', $data);
    }

    public function insertar()
    {
        $data = $this->model->setRol('Recamarera', '');
        print_r($data);
    }

    public function verUsuario($id)
    {
        if (!isset($id) || $id == '') {
            header('Location:' . BASE_URL);
        }
        $data = $this->model->getRol($id);
        print_r($data);
    }
    public function actualizar()
    {
        $data = $this->model->updateRol(3, 'usuario_registrado', '');
        return $data;
    }

    public function verRoles()
    {
        $data = $this->model->getRoles();
        print_r($data);
    }
}
