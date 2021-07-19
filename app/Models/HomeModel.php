<?php
require_once "src/Libreries/Core/mysql.php";
class homeModel extends Mysql
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setRol(string $nombre, string $descripcion)
    {
        $query_insert = "insert into roles (nombre, descripcion, created_at) values ('$nombre', '$descripcion', now()) ";
        $arrData = array($nombre, $descripcion);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }
    public function getRol($id)
    {
        $sql = "Select * from roles where id = $id";
        $request = $this->select($sql);
        return $request;
    }
    public function updateRol(int $id, string $nombre, string $descripcion)
    {
        $sql = "update roles set nombre = ?, descripcion = ? where id = $id";
        $arrData = array($nombre, $descripcion);
        $request = $this->update($sql, $arrData);
        return $request;
    }

    public function getRoles()
    {
        $sql = "Select * from roles where id";
        $request = $this->select_all($sql);
        return $request;
    }

    public function deleteRol(){

    }
}
