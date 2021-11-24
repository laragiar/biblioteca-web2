<?php

require_once './BiblioModel/userModel.php';
require_once './BiblioView/userView.php';
require_once './Helpers/authHelper.php';


class UserController {

    private $model;
    private $view;
    private $authHelper;
    


    function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->authHelper = new authHelper();
    }

    function showRegistro(){
        $this->view->showRegistroView();
    }

    function registrarseControl($userEmail, $userPassword){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $userEmail = $_POST['email'];
            $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $creado=$this->model->registrarse($userEmail, $userPassword);
            if (!isset ($creado)){
                session_start();
                $_SESSION['email'] = $userEmail; 
                $_SESSION['id'] = $creado->id;
                $_SESSION['rol'] = $creado->rol;
                $this->view->showHome(); 

            }else {
                $this->view->showLoginView("Acceso denegado. Usuario o contraseña invalidos");
            }
        }
        $this->view->showHome();
    }

    function showLogin(){
        $this->view->showLoginView();
    }
     
    function showUsers(){
        $this->authHelper->checkLoggedIn();
        if ($_SESSION['rol'] == 1){
            $users=$this->model->getUsers();
            $this->view->showUsers($users);
        }else {
            $this->view->showUsers("Necesita permiso de administrador.");         
        }
        
    }

    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $userEmail = $_POST['email'];
            $userPassword = $_POST['password'];

            $user = $this->model->getUser($userEmail);
           

          if ($user && password_verify($userPassword,$user->password)) {
                $this->authHelper->checkLoggedIn();
                $_SESSION['email'] = $userEmail;   
                $_SESSION['id'] = $user->id;
                $_SESSION['rol'] = $user->rol;
                $this->view->showHome(); 

            } else {
                 $this->view->showLoginView("Acceso denegado. Usuario o contraseña invalidos");
            }
        }
    }

    function logout(){
        $this->authHelper->logout();
        $this->view->showHome();
    }
    
    function deleteUser($id){
        $this->authHelper->checkLoggedIn();
        $rol=$this->authHelper->getRol();
        $user=$this->model->getUserById($id);
        if($user->rol!=0){
            $users=$this->model->getUserByRol($rol);
            $cantUser=count($users);
            if($cantUser!=1){
               $this->model->deleteUser($id);
               $this->view->showUsersLocation();
            }else{
               $this->view->showUsersLocation();
            }
        }else{
             $this->model->deleteUser($id);
             $this->view->showUsersLocation();
        }    
    } 
       
    function updateUser($id){
       $this->authHelper->checkLoggedIn();
        $user=$this->model->getUserById($id);
        if($user->rol==0){
                $user->rol=1;
                $this->model->updateUser($id,$user->rol);
                $this->view->showUsersLocation();
            }else{
                $user->rol=0;
                $this->model->updateUser($id,$user->rol);
                $this->view->showUsersLocation();
       } 
       
       //$this->view->showUsersLocation();
    
}   
    
            
}
    
        


