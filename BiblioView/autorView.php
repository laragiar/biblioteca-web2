<?php
require_once './libs/smarty-3.1.38/libs/Smarty.class.php';

class AutorView {

    function __construct(){
        $this->smarty = new Smarty();
        
    }

    function showAutor($autores){
        $this->smarty->assign('titulo','Autores');
        $this->smarty->assign('autores',$autores);
        $this->smarty->display('templates/autor.tpl');
    }

    function showAutorID($autor,$libros){
            $this->smarty->assign('titulo', $autor->nombre);
            $this->smarty->assign('autor',$autor);
            $this->smarty->assign('libros',$libros);
            $this->smarty->display('templates/autorDetail.tpl');
            
    }
  
     function formAutor(){
            $this->smarty->assign('titulo', 'Insertar nuevo autor');
            $this->smarty->display('templates/createAutor.tpl');           
    }

    function showEdit($autor){
        $this->smarty->assign('titulo', 'Editar autor');
        $this->smarty->assign('autor',$autor);
        $this->smarty->display('templates/editAutor.tpl');      
    }
    
    function showAutorLocation(){
        header("Location: ".BASE_URL."showAutor");
    }

}