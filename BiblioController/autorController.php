<?php

require_once './BiblioModel/autorModel.php';
require_once './BiblioView/autorView.php';
require_once './BiblioModel/libroModel.php';

class AutorController{


    private $model;
    private $view;
    private $modelLibro;

    function __construct(){
        $this->model = new autorModel();
        $this->modelLibro = new libroModel();
        $this->view = new autorView();
    }

    function showAutor(){
        $autor = $this->model->getAutor();
        $this->view->showAutor($autor);
    }
    
    function insertAutor(){
        $this->model->getAutor();
        $this->view->formAutor();
    }
    
    function createAutor(){
        $this->model->insertAutor($_POST['nombre'], $_POST['apellido'], $_POST['nacionalidad']);
        $this->view->showAutorLocation();
    }   
    

    function deleteAutor($id){
        $this->model->deleteAutor($id);
        $this->view->showAutorLocation();

    }

    function viewAutorID($id){
        $autor = $this->model->get_Autor($id);
        $libros = $this->modelLibro->getLibrosByAutor($id);
       $this->view->showAutorID($autor,$libros);
    } 

    function editAutor($id){
        $autor = $this->model->get_Autor($id);
        $this->view->showEdit($autor);
    } 

    function updateAutor($id){
        $this->model->updateAutor($id,$_POST['nombre'], $_POST['apellido'], $_POST['nacionalidad']);
        $this->view->showLibroLocation();
    }

}