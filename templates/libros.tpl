{include file='templates/header.tpl'}    


<div class="container mt-4">
<p class="tituloL"><ins>Libros segun su titulo</ins></p>

        <table class="table table-secondary table-striped">
        
            <thead>
                <tr>
                </tr>
            </thead>
            <tbody>
               {foreach from=$libros item=$libro}
                <tr>
               
                 <td class="subtituloL">{$libro->nombre}</td>
                   
                  <td> <a href="showLibroid/{$libro->idLibro}"><button class="btn btn-info text-light">Ver Detalles</button></a></td>
                  {if isset ($smarty.session.email) && ($smarty.session.rol == 1)}
                   <td> <a href="updateLibro/{$libro->idLibro}"><button class="btn btn-success">Editar</button></a></td>
                   <td> <a href="deleteLibro/{$libro->idLibro}"><button class="btn btn-danger">Borrar</button></a></td>
                   {/if}
                   
                
                </tr>
            </tbody>
            {/foreach}    
        </table>
        {if $error!=''} 
        <div>
            <h6 class="d-flex mt-3 alert alert-danger">{$error}</h6>
        </div>
        {/if}
        <div class="d-flex flex-row-reverse">
        <ul class="pagination mt-4">
            {if $pageActual!=1}
            <li class="page-item"><a class="page-link" href="showLibros?page={$pageActual-1}">Anterior</a></li>
            {/if}
            {for $page=1 to $pages}
              <li class="page-item"><a class="page-link" href="showLibros?page={$page}">{$page}</a></li>
            {/for}
            {if $pageActual<=$pages}
           <li class="page-item"><a class="page-link" href="showLibros?page={$pageActual+1}">Siguiente</a></li>
           {/if}
        </ul>
       </div>
</div>    
{include file='templates/footer.tpl'} 
