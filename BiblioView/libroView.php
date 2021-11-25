<?php
require_once './libs/smarty-3.1.38/libs/Smarty.class.php';

class LibroView {

    function __construct(){
            $this->smarty = new Smarty();
    }

    function showBiblio($libros,$autor){
        $this->smarty->assign('titulo','Biblioteca Web');
        $this->smarty->assign('autor',$autor);
        $this->smarty->assign('libros',$libros);
        $this->smarty->display('templates/biblio.tpl');

    }

    function showLibros($libros,$pages,$pageActual,$error=""){
        $this->smarty->assign('titulo','Libros');
        $this->smarty->assign('libros',$libros);
        $this->smarty->assign('pages', $pages);
        $this->smarty->assign('pageActual', $pageActual);
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/libros.tpl');      
    }

    function showLibroid($libro,$id,$rol=""){
        $this->smarty->assign('titulo','');
        $this->smarty->assign('libro',$libro);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('rol', $rol);
        $this->smarty->display('templates/libroDetail.tpl');    
    }

    function formLibro($libros, $autor){
       $this->smarty->assign('titulo','Inserte nuevo libro');
       $this->smarty->assign('libros',$libros);
       $this->smarty->assign('autor',$autor); 
       $this->smarty->display('templates/formlibro.tpl'); 
    }

    function showEdit($libro){
        $this->smarty->assign('titulo','Editar libro');
        $this->smarty->assign('libro',$libro);
        $this->smarty->display('templates/editLibro.tpl'); 
 
    }

    function search($libros,$autor){
        $this->smarty->assign('titulo','Biblioteca Web');
        $this->smarty->assign('autor',$autor);
        $this->smarty->assign('libros',$libros);
        $this->smarty->display('templates/search.tpl');

    }

    function homeRedireccion(){ 
       header("Location: ".BASE_URL."home");
    }

    function showLibroLocation(){
        header("Location: ".BASE_URL."showLibros?page=1");
    }  

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }
    
}
