  {include file='templates/header.tpl'}    
   
    <form action="createAutor" method="POST">
        <p>INSERTE AUTOR:</p>
        Nombre:<input type="text" name="nombre" required>
        Apellido:<input type="text" name="apellido" required>
        Nacionalidad:<input type="text" name="nacionalidad" required>
        <input type="submit" value="Crear Autor">
    </form>        
</body>


{include file='templates/footer.tpl'} 
                