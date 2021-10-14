<?php

require_once './BiblioModel/libroModel.php';
require_once './BiblioModel/autorModel.php';
require_once './BiblioView/libroView.php';
require_once './Helpers/authHelper.php';

class LibroController{

    private $model;
    private $view;
    private $modelAutor;
    private $authHelper;
    
    function __construct(){
        $this->model = new libroModel();
        $this->authHelper = new authHelper();
        $this->modelAutor = new autorModel();
        $this->view = new libroView();    
    }
    
    function showHome(){
        $libros= $this->model->getBiblio();
        $autor= $this->modelAutor->getAutor();
        $this->view->showBiblio($libros,$autor);     
    }

    function showLibros(){
        $libros=$this->model->getLibro();
        $this->view->showLibros($libros);
    }
    
    function showLibroid($id){
        $libro=$this->model->get_Libro($id);
        $this->view->showLibroid($libro);
    } 

    function insertLibro(){
        $this->authHelper->checkLoggedIn();
        $libros=$this->model->getBiblio();
        $autor=$this->modelAutor->getAutor();
        $this->view->formLibro($libros,$autor);
    }
    
    function createLibro(){
        $this->authHelper->checkLoggedIn();
        $this->model->insertLibro($_POST['nombre'], $_POST['genero'], $_POST['editorial'], $_POST['descripcion'],$_POST['idAutor']);
        $this->view->showLibroLocation();
    }   
    
    
    function updateLibro($id){
        $this->authHelper->checkLoggedIn();
        $libro=$this->model->get_Libro($id);
        $this->view->showEdit($libro);
    } 

    function editLibro($id){
        $this->authHelper->checkLoggedIn();
        $this->model->updateLibro($id,$_POST['nombre'], $_POST['genero'], $_POST['editorial'], $_POST['descripcion']);
        $this->view->showLibroLocation();
    }
    
    function deleteLibro($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteLibro($id);
        $this->view->showLibroLocation();

    }

}
