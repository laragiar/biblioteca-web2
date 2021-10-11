<?php

require_once './BiblioModel/libroModel.php';
require_once './BiblioModel/autorModel.php';
require_once './BiblioView/libroView.php';

class LibroController{

    private $model;
    private $view;
    private $modelAutor;
    
    function __construct(){
        $this->model = new libroModel();
        $this->view = new libroView();
        $this->modelAutor = new autorModel();
    }
  
    function showHome(){
        $libros= $this-> model->getBiblio();
        $autor= $this-> modelAutor->getAutor();
        $this->view->showBiblio($libros,$autor);
        
    }

    function showLibros(){
        $libros = $this->model->getLibro();
        $this->view->showLibros($libros);
    }
    
    function showLibroid($id){
        $libro = $this->model->get_Libro($id);
        $this->view->showLibroid($libro);
    } 

    function insertLibro(){
        $libros=$this->model->getBiblio();
        $autor=$this->modelAutor->getAutor();
        $this->view->formLibro($libros,$autor);
    }
    
    function createLibro(){
        $this->model->insertLibro($_POST['nombre'], $_POST['genero'], $_POST['editorial'], $_POST['descripcion'],$_POST['idAutor']);
        $this->view->showLibroLocation();
    }   
    
    
    function updateLibro($id){
        $libro = $this->model->get_Libro($id);
        $this->view->showEdit($libro);
    } 

    function editLibro($id){
        $this->model->updateLibro($id,$_POST['nombre'], $_POST['genero'], $_POST['editorial'], $_POST['descripcion']);
        $this->view->showLibroLocation();
    }
    
   function searchTitulo(){  
        $libros = $this->model->searchTitulo($_POST['nombre']);
        $this->view->searchView($libros);
    } 

    function deleteLibro($id){
        $this->model->deleteLibro($id);
        $this->view->showLibroLocation();

    }

}
