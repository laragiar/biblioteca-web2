 {include file='templates/header.tpl'} 
<div class="container mt-4">
<p class="tituloL"><ins>Usuarios<ins></p>
        <table class="table table-secondary table-striped">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Rol</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$users item=$user}
                <tr>
                    <td>{$user->email}</td> 
                    {if $user->rol == 1}
                        <td>Administrador</td>
                    {elseif $user->rol == 0}
                         <td>Usuario sin permiso de administrador</td>
                    {/if}
                    <td><a href="updateUser/{$user->id}"><button class="btn btn-success text-light">Cambiar rol</button></a></td>
                    <td><a href="deleteUser/{$user->id}"><button  class="btn btn-danger text-light">Borrar</button></a></td>
                    
                {/foreach}    
                </tr>
            </tbody>
        </table>
        {if $error}
            <div>
            <h6 class="d-flex mt-3 alert alert-danger">{$error}</h6>
            </div>
        {/if}
          
{include file='templates/footer.tpl'} 