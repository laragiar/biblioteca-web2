{include file='templates/header.tpl'}    


<div class="container mt-4">
<p class="tituloL"><ins>Libros segun su titulo</ins></p>

        <table class="table table-secondary table-striped">
        {foreach from=$libros item=$libro}
            <thead>
                <tr>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                 <th><p class="subtituloL"> {$libro->nombre}</th>
                   
                  <td> <a href="showLibroid/{$libro->idLibro}"><button class="btn btn-info text-light">Ver Detalles</button></a>
                   {if isset ($smarty.session.email)}
                   <a href="updateLibro/{$libro->idLibro}"><button class="btn btn-success">Editar</button></a>
                   <a href="deleteLibro/{$libro->idLibro}"><button class="btn btn-danger">Borrar</button></a>
                   {/if}
                   </td>
                
                </tr>
            </tbody>
            {/foreach}    
        </table>
        
{include file='templates/footer.tpl'} 

</div>