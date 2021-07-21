<?php
require_once "src/Libreries/Core/mysql.php";
class LoginModel  extends Mysql
{
    private $id;
    private $user;
    private $pass;
    private $token;

    public function __construct()
    {
        parent::__construct();
    }
    public function loginUser($usuario, $password)
    {
        $this->user = $usuario;
        $this->pass = $password;
        $sql = "Select id, status from users where ";
        $sql .= "email = '{$this->user}' and ";
        $sql .= "password = '{$this->pass}' and ";
        $sql .= "status != 0";
        $req = $this->select($sql);
        return $req;
    }

    public function session_login(int $id){
        $sql = "select u.id, r.nombre as 'rol', u.nombre, u.apellido_pa, u.apellido_ma, u.telefono, u.email, u.token, u.status from users u ";
        $sql .= "inner join roles r on r.id = u.rol_id where u.id = $id";
        return $req = $this->select($sql);
        
    } 

    public function crearUsuario()
    {
        $usr = "faotqm@hotmail.com";
        $nom = "Carlos";
        $ape_pa = "Valladares";
        $ape_ma = "Del valle";
        $eml = "faotqm@hotmail.com";
        $pass = hash("SHA256", "123456");
        $tok = Utils::token();
        $rol = 1;


        $arrData = [
            $usr,
            $nom,
            $ape_pa,
            $ape_ma,
            $eml,
            $pass,
            $tok,
            $rol
        ];

        $sql = "Insert into users (usuario, nombre, apellido_pa ";
        $sql .= "apellido_ma, email, password, token, rol, created_at) ";
        $sql .= "values ('$usr', '$nom', '$ape_pa', '$ape_ma', '$eml', '$pass', '$tok', $rol, now())";
        echo $sql;
        die;
        $req = $this->insert($sql, $arrData);
    }
}
