 {include file='templates/header.tpl'}
 <div class="container mt-4">
     <p class="tituloL"><ins>Autores<ins></p>
     <table class="table table-secondary table-striped">
         <thead>
             <tr>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Nacionalidad</th>
                 <th></th>
                 {if isset ($smarty.session.email)  && ($smarty.session.rol == 1)}
                     <th></th>
                     <th></th>
                 {/if}
             </tr>
         </thead>
         <tbody>
             {foreach from=$autores item=$autor}
                 <tr>
                     <td class="subtituloL">{$autor->nombre}</td>
                     <td class="subtituloL">{$autor->apellido}</td>
                     <td class="subtituloL">{$autor->nacionalidad}</td>
                     <td><a href="viewAutorID/{$autor->idAutor}"><button class="btn btn-info text-light">Ver
                                 Libros</button></a></td>
                     {if isset ($smarty.session.email) && ($smarty.session.rol == 1)}
                         <td><a href="editAutor/{$autor->idAutor}"><button
                                     class="btn btn-success text-light">Editar</button></a></td>
                         <td><a href="deleteAutor/{$autor->idAutor}"><button
                                     class="btn btn-danger text-light">Borrar</button></a></td>
                     {/if}

                 {/foreach}
             </tr>
         </tbody>
     </table>

     {include file='templates/footer.tpl'}
</div>