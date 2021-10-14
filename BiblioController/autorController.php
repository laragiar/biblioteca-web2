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
        $this->model->insertAutor($_POST['nombre'], $_POST['apellido'], $_POST['nacionalidad']);
        $this->view->showAutorLocation();
    }   
    

    function deleteAutor($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteAutor($id);
        $this->view->showAutorLocation();
    }

    function viewAutorID($id){
       $autor = $this->model->get_Autor($id);
       $libros = $this->modelLibro->getLibrosByAutor($id);
       $this->view->showAutorID($autor,$libros);
    } 

    function editAutor($id){
        $this->authHelper->checkLoggedIn();
        $autor = $this->model->get_Autor($id);
        $this->view->showEdit($autor);
    } 

    function updateAutor($id){
        $this->authHelper->checkLoggedIn();
        $this->model->updateAutor($id,$_POST['nombre'], $_POST['apellido'], $_POST['nacionalidad']);
        $this->view->showAutorLocation();
    }

}