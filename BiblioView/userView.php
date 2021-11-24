<?php
require_once './libs/smarty-3.1.38/libs/Smarty.class.php';

class UserView{

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showRegistroView(){
        $this->smarty->assign('titulo','Registro');
        $this->smarty->display('templates/registro.tpl');
    }
    
    function showLoginView($error = ""){
        $this->smarty->assign('titulo','Ingresar');
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/login.tpl');    
    }

    function showHome(){
        header("Location: " .BASE_URL."home");
    }
    
    function showUsers($users,$error=""){
        $this->smarty->assign('titulo','Usuarios');
        $this->smarty->assign('users',$users);
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/users.tpl');      
    }
   
    function showUsersLocation(){
        header("Location: ".BASE_URL."showUsers");
    }  

}