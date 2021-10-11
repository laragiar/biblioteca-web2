   {include file='templates/header.tpl'}           
            
            <h1>{$autor->nombre}{$autor->apellido}</h1> 
            <h3>{$autor->nacionalidad}</h3>
            {foreach from=$libros item=$libro}
                <h3>{$libro->nombre}</h3>
            {/foreach}

</body>
{include file='templates/footer.tpl'} 