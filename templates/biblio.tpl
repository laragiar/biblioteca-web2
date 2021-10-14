{include file='templates/header.tpl'}         
            <div class="container-fluid  mt-4">
            <h1 class="text-center p-3">{$titulo}</h1> 
                     
            <div class="container-fluid">
            <p class="tituloL"><ins>Visite los libros disponibles</ins></p>
             
            <table class="table table-hover">
                <thead class="bg-secondary text-center text-light">
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Autor</th>
                    </tr>
                </thead>
                <tbody>
                
        {foreach from=$libros item=$libro}
           <tr scope="row"><td>{$libro->nombre}</td>
                <td>{$libro->genero}</td>
                <td>{$libro->editorial}</td>
                <td>{$libro->descripcion}</td>
                <td><a class="text-dark" href="viewAutorID/{$libro->idAutor}"><ins>{$libro->nombreA}{$libro->apellidoA}</ins></a></td>                     
        {/foreach}
        
            </tr>
            </tbody>
        </table>
        </div>

</html>