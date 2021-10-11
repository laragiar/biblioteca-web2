<?php

class LibroView {

    function __construct(){
            //aca va $this->smarty = new Smarty();
    }

    
    function showBiblio($libros,$autor){
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
            <form id="select-titulo"  action="search/titulo" method="POST">
                <input type="text" name="nombre" placeholder="Titulo libro">
                <input type="submit" id="btn-titulo" name="Filtrar">
            </form>
            <form id="select-autor" action="search/autor" method="POST">
               
                <select name="autor" id="select-autor">';
                    foreach ($autor as $autor){
                        $html.='<option>'.$autor->nombre.''.$autor->apellido.'</option>';
                    }
                
                $html.='
                </select>
                <input type="submit" id="btn-autor" name="Filtrar">
            </form>
            <form id="select-genero" action="search/genero" method="POST">
            <select name="genero" id="select-genero">';
            foreach ($libros as $libro){
                $html.='<option>'.$libro->genero.'</option>';
            }
            $html.= '
            
            </select>
            <input type="submit" id="btn-genero" name="Filtrar">
        
            </div>
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
                
        foreach ($libros as $libro){
           $html.='<tr><td>'.$libro->nombre.'</td>'
                  .'<td>'.$libro->genero.'</td>'
                  .'<td>'.$libro->editorial.'</td>'
                  .'<td>'.$libro->descripcion.'</td>'
                  .'<td><a href=viewAutorID/'.$libro->idAutor.'>'.$libro->nombreA.''.$libro->apellidoA.'</a></td>'; 
                    
        }
        $html .=    
          '      </tr>
            </tbody>
        </table>
        
        
        </body>
        <script src="js/filtro.js"></script>
        </html>'; 
        echo $html;

    }

    function showLibros($libros){
        $html = '<!DOCTYPE html>
        <html lang="en">
            <head>
                <base href="'.BASE_URL.'"/> 
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Libros</title>
            </head>
            <body>
                <div>
                    <a href="showAutor"><button>Autores</button></a>
                    <a href="showLibros"><button>Libros</button></a>
                    <a href="insertLibro"><button>Insertar nuevo libro</button></a>
                    <a href="insertAutor"><button>Insertar nuevo autor</button></a>
                </div>
                <h1> Libros segun su titulo </h1>
                <div>';
                foreach ($libros as $libro){
                    $html.= '<h3>'.$libro->nombre.'<a href="showLibroid/'.$libro->idLibro.'"><button>Ver Detalles</button></a>
                    <a href="deleteLibro/'.$libro->idLibro.'"><button>Borrar</button></a>
                    <a href="updateLibro/'.$libro->idLibro.'"><button>Editar</button></a></h3>';
                }
            $html.='
                </div>    
            </body>
            <footer>
            <a href="home"><button>Volver</button></a>
            </footer>
        </html>';
       echo $html;
    }

    function showLibroid($libro){
        $html = '<!DOCTYPE html>
        <html lang="en">
            <head>
                <base href="'.BASE_URL.'"/> 
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$libro->nombre.'</title>
            </head>
            <body>
                <div>
                    <a href="showAutor"><button>Autores</button></a>
                    <a href="showLibros"><button>Libros</button></a>
                    <a href="insertLibro"><button>Insertar nuevo libro</button></a>
                    <a href="insertAutor"><button>Insertar nuevo autor</button></a>
                </div>
                <div>
                <h2>'.$libro->nombre.'</h2>
                <p>Genero: '.$libro->genero.'</p>
                <p>Autor: '.$libro->nombreA.''.$libro->apellidoA.'</p>
                <p>Descripcion: '.$libro->descripcion.'</p>
                <p>Editorial: '.$libro->editorial.'</p>
                
                </div>    
            </body>
            <footer>
            <a href="home"><button>Volver</button></a>
            </footer>
        </html>';
       echo $html;
    }

    function formLibro($libros, $autor){
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
        
        <form action="createLibro" method="POST">
            <p>INSERTE LIBRO:</p>
            Nombre:<input type="text" name="nombre" required>
            Genero:<input type="text" name="genero" required>
            Editorial:<input type="text" name="editorial" required>
            Descripcion <textarea name="descripcion"></textarea>
            <select name="idAutor">';
            foreach ($autor as $autorA){
                $html.='<option>'.$autorA->idAutor.'-'.$autorA->nombre.''.$autorA->apellido.'</option>';
            }
          $html.=' <input type="submit" value="Insertar libro">
        </form>        
        </body>
        <a href="home"><button>Volver</button></a>
        </html>'; 
        echo $html;
    }

    function showEdit($libro){
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
         
        <form action="editLibro/'.$libro->idLibro.'" method="POST">
            
            Nombre:<input type="text" name="nombre" value="'.$libro->nombre.'">
            Genero:<input type="text" name="genero" value="'.$libro->genero.'">
            Editorial:<input type="text" name="editorial" value="'.$libro->editorial.'">
            Descripcion <textarea name="descripcion" >'.$libro->descripcion.'</textarea>';
          $html.=' <input type="submit" value="Finalizar edicion">
        </form>        
        </body>
        <a href="home"><button>Volver</button></a>
        </html>'; 
        echo $html;
    }

    
    function searchView($nombre){
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
        $html .=    
        '      </tr>
            </tbody>
        </table>

        </body>
        <script src="js/filtro.js"></script>
        </html>'; 
        echo $html;

    }

    function homeRedireccion(){ 
       header("Location: ".BASE_URL."home");
    }

    function showLibroLocation(){
        header("Location: ".BASE_URL."showLibros");
    }  
}
