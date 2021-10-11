 {include file='templates/header.tpl'} 
<form action="createLibro" method="POST">
            <p>Completar campos para insertar un nuevo libro:</p>
            Nombre:<input type="text" name="nombre" required>
            Genero:<input type="text" name="genero" required>
            Editorial:<input type="text" name="editorial" required>
            Descripcion <textarea name="descripcion"></textarea>
            <select name="idAutor">
            {foreach from=$autor item=$autorA}
                <option>{$autorA->idAutor}-{$autorA->nombre}{$autorA->apellido}</option>
            {/foreach}
           <input type="submit" value="Insertar libro">
        </form>        
        </body>
{include file='templates/footer.tpl'} 