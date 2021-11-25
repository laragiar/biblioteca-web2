<?php

require_once './BiblioModel/autorModel.php';
require_once './BiblioView/autorView.php';
require_once './BiblioModel/libroModel.php';
require_once './Helpers/AuthHelper.php';

class AutorController{

    private $model;
    private $view;
    private $modelLibro;
    private $authHelper;

    function __construct(){
        $this->model = new autorModel();
        $this->modelLibro = new libroModel();
        $this->authHelper = new authHelper();
        $this->view = new autorView();
       
    }

    function showAutor(){
        $autores = $this->model->getAutor();
        $this->view->showAutor($autores);
    }
    
    function insertAutor(){
        $this->authHelper->checkLoggedIn();
        $this->model->getAutor();
        $this->view->formAutor();
    }
    
    function createAutor(){
        $this->authHelper->checkLoggedIn();
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $nacionalidad=$_POST['nacionalidad'];
        if ($_SESSION['rol']==1){
            if (isset($nombre) && isset($apellido) && isset ($nacionalidad)
                && !empty($nombre) && !empty ($apellido) && !empty ($nacionalidad)){
                $this->model->insertAutor($nombre,$apellido,$nacionalidad);
                $this->view->showAutorLocation();
            }
        }else{
            $this->view->showAutorLocation();
        }
    }   
    

    function deleteAutor($id){
        $this->authHelper->checkLoggedIn();
        if ($_SESSION['rol']==1){
        $this->model->deleteAutor($id);
        $this->view->showAutorLocation();
        }else{
            $this->view->showAutorLocation();
        }
    }

    function viewAutorID($id){
       $autor = $this->model->get_Autor($id);
       $libros = $this->modelLibro->getLibrosByAutor($id);
       $this->view->showAutorID($autor,$libros);
    } 

    function editAutor($id){
        $this->authHelper->checkLoggedIn();
        if(isset ($id)){
            $autor = $this->model->get_Autor($id);
            $this->view->showEdit($autor);
        }
    } 

    function updateAutor($id){
        $this->authHelper->checkLoggedIn();
        if ($_SESSION['rol']==1){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $nacionalidad=$_POST['nacionalidad'];
            if (isset($id) &&isset($nombre) && isset($apellido) && isset ($nacionalidad)
                && !empty($nombre) && !empty ($apellido) && !empty ($nacionalidad)){
                $this->model->updateAutor($id,$nombre, $apellido, $nacionalidad);
                $this->view->showAutorLocation();
            }

        }else{
            $this->view->showAutorLocation();
        }
    }

}