<?php

require_once './BiblioModel/userModel.php';
require_once './BiblioView/loginView.php';


class UserController {

    private $model;
    private $view;


    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function showRegistro(){
        $this->view->showRegistroView();
    }

    function registrarseControl($userEmail, $userPassword){
        if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {
            $userEmail = $_POST['email'];
            $userPassword = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
             $this->model->registrarse($userEmail, $userPassword);
        }
        $this->view->showHome();
    }

    function showLogin(){
        $this->view->showLoginView();
    }

    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['contraseña'];

            $user = $this->model->getUser($userEmail);

          if ($user && password_verify($userPassword,$user->contraseña)) {
                session_start();
                $_SESSION["email"] = $userEmail;
                    
                $this->view->showHome(); 

            } else {
                    $this->view->showLoginView("Acceso denegado");
            }
        }
    }

    function logout(){
            session_start();
            session_destroy();
            $this->view->showLoginView("Te deslogueaste");
    }


        
}

