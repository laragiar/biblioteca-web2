<?php
require_once './libs/smarty-3.1.38/libs/Smarty.class.php';

class LibroView {

    function __construct(){
            $this->smarty = new Smarty();
    }

    function showBiblio($libros,$autor,$admin){
        $this->smarty->assign('titulo','Biblioteca');
        $this->smarty->assign('autor',$autor);
        $this->smarty->assign('libros',$libros);
        $this->smarty->assign('admin',$admin);
        $this->smarty->display('templates/biblio.tpl');

    }

    function showLibros($libros,$admin){
        $this->smarty->assign('titulo','Libros');
        $this->smarty->assign('libros',$libros);
        $this->smarty->assign('admin',$admin);
        $this->smarty->display('templates/libros.tpl');      
    }

    function showLibroid($libro){
        $this->smarty->assign('titulo','');
        $this->smarty->assign('libro',$libro);
        $this->smarty->display('templates/libroDetail.tpl');    
    }

    function formLibro($libros, $autor ,$log){
       $this->smarty->assign('titulo','Inserte nuevo libro');
       $this->smarty->assign('log',$log);
       $this->smarty->assign('libros',$libros);
       $this->smarty->assign('autor',$autor); 
       $this->smarty->display('templates/formlibro.tpl'); 
    }

    function showEdit($libro){
        $this->smarty->assign('titulo','Editar libro');
        $this->smarty->assign('libro',$libro);
        $this->smarty->display('templates/editLibro.tpl'); 
 
    }

    
 /*   function searchView($nombre){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Biblioteca</title>
        </head>
        <body>
            <a href="showAutor"><button>Autores</button></a>
            <a href="showLibros"><button>Libros</button></a>
            <a href="insertLibro"><button>Insertar nuevo libro</button></a>
            <a href="insertAutor"><button>Insertar nuevo autor</button></a>
            <h1>Biblioteca</h1>
            <h4>Visite los libros disponibles</h4>           
             <div>
            INSERTE SU BUSQUEDA: 
            <select name="filtro" id="select-filtro">
                <option selected>Elegir filtro</option> 
                <option value="titulo">Titulo</option>
                <option value="autor">Autor</option>
                <option value="genero">Genero</option>
            </select>
        <table>
        <thread>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Editorial</th>
                <th>Descripcion</th>
                <th>Autor</th>
            </tr>
        </thread>
        <tbody>
            ';
     
        foreach ($nombre as $libro){
        $html.='<tr><td>'.$libro->nombre.'</td>'
                .'<td>'.$libro->genero.'</td>'
                .'<td>'.$libro->editorial.'</td>'
                .'<td>'.$libro->descripcion.'</td>'
                .'<td><a href=viewAutorID/'.$libro->idAutor.'>'.$libro->nombreA.''.$libro->apellidoA.'</a></td>'; 
                    
        }
       
              </tr>
            </tbody>
        </table>

        </body>
       

}     */

    function homeRedireccion(){ 
       header("Location: ".BASE_URL."home");
    }

    function showLibroLocation(){
        header("Location: ".BASE_URL."showLibros");
    }  

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }
}
