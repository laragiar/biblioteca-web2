<!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="{BASE_URL}"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <title>{$titulo}</title>
        </head>
        <body class="bg-light">
           <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-dark">
             
            <button><a href="home">Home</a></button>
            <button><a href="showAutor">Autores</a></button>
            <button><a href="showLibros">Libros</a></button>
            
            {if $admin!=""}
            <button><a href="insertLibro">Insertar nuevo libro</a></button>
            <button><a href="insertAutor">Insertar nuevo autor</a></button>   
            <button><a href="logout">Log out</a></button>
            {/if}
            {if $admin==""}
            <button><a href="login">Login</a></button>
            <button><a href="registrarse">Registrarse</a></button> 
            {/if}    
           
            </nav>
                
           </div> 