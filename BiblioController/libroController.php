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
    
    function showLibroid($id){
        $libro=$this->model->get_Libro($id);
        $id=$this->authHelper->getId();
        $rol=$this->authHelper->getRol();
        $this->view->showLibroid($libro,$id,$rol);
    } 

    function insertLibro(){
        $this->authHelper->checkLoggedIn();
        $libros=$this->model->getBiblio();
        $autor=$this->modelAutor->getAutor();
        $this->view->formLibro($libros,$autor);
    }
    
    function createLibro(){
        $this->authHelper->checkLoggedIn();
        if( $_FILES['input_name']['type'] == "image/jpg" ||
            $_FILES['input_name']['type'] == "image/jpeg" ||
            $_FILES['input_name']['type'] == "image/png"){
                $this->model->insertLibro($_POST['nombre'], $_POST['genero'], $_POST['editorial'], $_POST['descripcion'],$_POST['idAutor'],$_FILES['input_name']);
                $this->view->showLibroLocation();
        }else {
                $this->model->insertLibro($_POST['nombre'], $_POST['genero'], $_POST['editorial'], $_POST['descripcion'],$_POST['idAutor']);
                $this->view->showLibroLocation();
        }   
       
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
        if ($this->authHelper->checkLoggedIn() && $_SESSION['rol']==1){
            $this->model->deleteLibro($id);
            $this->view->showLibroLocation();
        }else{ /////////////////////////////ERROR NO SOS ADMINISTRADORRRRRR!!!!!!!!!
            $this->view->showLibroLocation();
        }
        

    }

    function search(){   
        $busqueda= $_POST['search'];
        if ($busqueda != ''){
            $libros=$this->model->search($busqueda);
            if ($libros){
                foreach($libros as $libro){
                    $idAutor=$libro->idAutor;
                    $autor= $this->modelAutor->get_Autor($idAutor);
                $this->view->search($libros,$autor);
                 }       
            }else{
                $this->view->homeRedireccion();}
        }else{
            $this->view->homeRedireccion();
        }
        
        
    }

    function showPagination(){
        $resultsPage = 7; //variable de cant de resultados deseados por pagina (limite)
        $libros= count ($this->model->getLibros()); //obtiene cantidad de la tabla
        $numberPages = ceil($libros / $resultsPage); //calcula cant de paginas existenes, ceil devuelve la division redondeada
        if (!isset($_GET['page']) || ($_GET['page'] == '') ||  ($_GET['page'] == 0)) { //si no se especifica pagina se muestra la primera
            $page = 1;
        } else {
            $page = $_GET['page'];
            if ($numberPages>=$page){
                $pageResult = ($page - 1) * $resultsPage; //obtiene inicio de la porcion de la tabla requerida
                $librosLimit = $this->model->getLibrosByLimit($pageResult, $resultsPage);
                $this->view->showLibros($librosLimit,$numberPages,$page);
            }else {
                $page=$page-1;
                $pageResult = ($page - 1) * $resultsPage; 
                $librosLimit = $this->model->getLibrosByLimit($pageResult, $resultsPage);
                $this->view->showLibros($librosLimit,$numberPages,$page);
            }
        } 
    }

}
