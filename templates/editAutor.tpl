{include file='templates/header.tpl'}   
<div class=" container mt-4">
      <div class=" text-center w-100" >    
    <form action="updateAutor/{$autor->idAutor}" method="POST">
            <p class="tituloL">Editando Autor:</p>
            Nombre:<input type="text" name="nombre" value="{$autor->nombre}">
            Apellido:<input type="text" name="apellido" value="{$autor->apellido}">
            Nacionalidad:<input type="text" name="nacionalidad" value="{$autor->nacionalidad}">
            <input type="submit" value="Confirmar edicion">
    </form>  
    </div>      
</body>

{include file='templates/footer.tpl'}  




        