<?php

class AutorView {

    function __construct(){
            //aca va $this->smarty = new Smarty();
    }

    function showAutor($autor){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Autores</title>
        </head>
        <body>
        <div>
            <a href="showAutor"><button>Autores</button></a>
            <a href="showLibros"><button>Libros</button></a>
            <a href="insertLibro"><button>Insertar nuevo libro</button></a>
            <a href="insertAutor"><button>Insertar nuevo autor</button></a>
        </div>        
        <h1>Autores:</h1>
        <table>
        <thread>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nacionalidad</th>
            <th></th>
        </tr>
        </thread>
        <tbody>';
        foreach ($autor as $autor){
           $html.= '<tr>
            <td>'.$autor->nombre.'</td> 
            <td>'.$autor->apellido.'</td>
            <td>'.$autor->nacionalidad.'</td>
            <td><a href="deleteAutor/'.$autor->idAutor.'"><button>Borrar</button></a</td>
            <td><a href="editAutor/'.$autor->idAutor.'"><button>Editar</button></a</td>
            <td><a href="viewAutorID/'.$autor->idAutor.'"><button>Ver Libros</button></a></td>';
        }    
        $html.= '</tr>
        </tbody>
        </table>
        <a href="home"><button>Volver</button></a>
        </body>
        
        </html>';
        echo $html;

    }

    function showAutorID($autor,$libros){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="'.BASE_URL.'"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$autor->nombre.''.$autor->apellido.'</title>
        </head>
        <body>
            <div>
                <a href="showAutor"><button>Autores</button></a>
                <a href="showLibros"><button>Libros</button></a>
                <a href="insertLibro"><button>Insertar nuevo libro</button></a>
                <a href="insertAutor"><button>Insertar nuevo autor</button></a>
            </div>         
            <h1>'.$autor->nombre.''.$autor->apellido.'</h1> 
            <h3>'.$autor->nacionalidad.'</h3>';
            foreach ($libros as $libro){
                $html.='<h3>'.$libro->nombre.'</h3>';
            }

          $html.='  
        </body>
        <a href="home"><button>Volver</button></a>
        </html>';
       echo $html; 
    }

    
     function formAutor(){
            $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
            <base href="'.BASE_URL.'"/> 
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
            <div>
                <a href="showAutor"><button>Autores</button></a>
                <a href="showLibros"><button>Libros</button></a>
                <a href="insertLibro"><button>Insertar nuevo libro</button></a>
                <a href="insertAutor"><button>Insertar nuevo autor</button></a>
            </div>         
            
            <form action="createAutor" method="POST">
                <p>INSERTE AUTOR:</p>
                Nombre:<input type="text" name="nombre" required>
                Apellido:<input type="text" name="apellido" required>
                Nacionalidad:<input type="text" name="nacionalidad" required>
               <input type="submit" value="Crear Autor">
            </form>        
            </body>
            <a href="home"><button>Volver</button></a>
            </html>'; 
            echo $html;
    }

    function showEdit($autor){
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
        <base href="'.BASE_URL.'"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <div>
            <a href="showAutor"><button>Autores</button></a>
            <a href="showLibros"><button>Libros</button></a>
            <a href="insertLibro"><button>Insertar nuevo libro</button></a>
            <a href="insertAutor"><button>Insertar nuevo autor</button></a>
        </div>         
        
        <form action="updateAutor/'.$autor->idAutor.'" method="POST">
            <p>Editando Autor:</p>
            Nombre:<input type="text" name="nombre" value="'.$autor->nombre.'">
            Apellido:<input type="text" name="apellido" value="'.$autor->apellido.'">
            Nacionalidad:<input type="text" name="nacionalidad" value="'.$autor->nacionalidad.'">
           <input type="submit" value="Confirmar edicion">
        </form>        
        </body>
        <a href="home"><button>Volver</button></a>
        </html>'; 
        echo $html;
    }
    
    function showAutorLocation(){
        header("Location: ".BASE_URL."showAutor");
    }

}