 {include file='templates/header.tpl'} 
<div class="container mt-4">
<p class="tituloL"><ins>Autores:<ins></p>
        <table class="table table-secondary table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nacionalidad</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$autores item=$autor}
                <tr>
                    <td>{$autor->nombre}</td> 
                    <td>{$autor->apellido}</td>
                    <td>{$autor->nacionalidad}</td>
                    <td><a href="viewAutorID/{$autor->idAutor}"><button  class="btn btn-info text-light" >Ver Libros</button></a></td>
                    <td><a href="editAutor/{$autor->idAutor}"><button class="btn btn-success text-light">Editar</button></a></td>
                    <td><a href="deleteAutor/{$autor->idAutor}"><button  class="btn btn-danger text-light">Borrar</button></a></td>
                    
                    
                {/foreach}    
                </tr>
            </tbody>
        </table>
    </body>        
{include file='templates/footer.tpl'} 
</div>