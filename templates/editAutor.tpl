{include file='templates/header.tpl'}   
    <form action="updateAutor/{$autor->idAutor}" method="POST">
            <p>Editando Autor:</p>
            Nombre:<input type="text" name="nombre" value="{$autor->nombre}">
            Apellido:<input type="text" name="apellido" value="{$autor->apellido}">
            Nacionalidad:<input type="text" name="nacionalidad" value="{$autor->nacionalidad}">
            <input type="submit" value="Confirmar edicion">
    </form>        
</body>

{include file='templates/footer.tpl'}  