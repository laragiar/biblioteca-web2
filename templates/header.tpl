<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="{BASE_URL}"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="styleD.css">
            <title>{$titulo}</title>
        </head>
        <body class="bg-light">
           <div class="container-fluid">
          
                
          </div> 
          <div>
          <nav class="navbar navbar-dark bg-dark px-5">
              <div>
                <ul class="list-inline hover">
                    <li  class="px-4 hover"><a href="home" class="mt-2 text-light">Home</a></li>
                    <li class="px-4"><a href="showAutor" class="mt-2 text-light ">Autores</a></li>
                    <li  class="px-4"><a href="showLibros" class="mt-2 text-light">Libros</a></li>
                    {if isset ($smarty.session.email)}
                      <li  class="px-4"><a href="insertAutor" class="mt-2 text-light">Insertar nuevo autor</a></li>
                      <li  class="px-4"><a href="insertLibro"  class="mt-2 text-light">Insertar nuevo libro </a></li>
                    {/if}
                </ul> 
            </div>
            <div>
                <ul class="nav justify-content-end">
                {if isset ($smarty.session.email)}
                <li  class="px-4 "><a href="logout"class="mt-2 text-light"><p><ins>Log Out</ins></p></a></li>
                {else}
                <li  class="px-4"><a href="registrarse" class="mt-2 text-light"><p><ins>Registrarse</ins></p></a></li>
                <li  class="px-4 "> <a href="login"class="mt-2 text-light"><p><ins>Log In</ins></p></a></li>
                {/if}
                </ul>
            </div>  
          </nav>
 </div>