 {include file='templates/header.tpl'} 

        <form action="editLibro/{$libro->idLibro}" method="POST">           
            Nombre:<input type="text" name="nombre" value="{$libro->nombre}">
            Genero:<input type="text" name="genero" value="{$libro->genero}">
            Editorial:<input type="text" name="editorial" value="{$libro->editorial}">
            Descripcion <textarea name="descripcion" >{$libro->descripcion}</textarea>
            <input type="submit" value="Finalizar edicion">
        </form> 
          
    </body>
        
{include file='templates/footer.tpl'} 