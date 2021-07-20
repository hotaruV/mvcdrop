<?php
class Login extends Controllers{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function login(){
        $data = [
            'pages_title' => 'Login de Ingreso',
            'pages_styles_css' => 'login.css',
            'pages_function_js' => 'login_functions.js'
        ];
        $this->views->getView($this, 'login', $data);
    }
    public function ingresar(){
        
        if($_POST){
            if(empty($_POST['email']) || empty($_POST['password'])){
                $arrResponse = ['status' => false, 'msg'=> 'datos incorrectos'];
            }else{
                $loginEmail = strtolower(Utils::strClear($_POST['email']));
                $loginPassword = hash("SHA256", $_POST['password']);
                $reqUser = $this->model->loginUser($loginEmail, $loginPassword);
                if(empty($reqUser)){
                    $arrResponse = ['status' => false, 'msg'=> 'usuario o contraseña incorrectos'];
                }else{
                    $arrData = $reqUser;
                    if($arrData['status'] == 2){
                        $_SESSION['id'] = $arrData['id'];
                        $_SESSION['login'] = true;
                        $arrResponse = ['status' => true, 'msg'=> 'ok'];
                    }else{
                        $arrResponse = ['status' => false, 'msg'=> 'cuenta desactivada'];
                    }
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
       
    }

    public function registro(){
        $res = $this->model->crearUsuario();
        echo $res;
    }


}