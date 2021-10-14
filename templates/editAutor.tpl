{include file='templates/header.tpl'}   
<div class=" container mt-4">
    <div class=" w-100" >    
    <form action="updateAutor/{$autor->idAutor}" method="POST">
           <p class="tituloL">Editando Autor:</p>
           <div class="form-row">
                <div class="col">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="{$autor->nombre}">
                </div>
                <div class="col">
                        <label>Apellido:</label>
                        <input type="text" class="form-control" name="apellido" value="{$autor->apellido}">
                </div>
                <div class="col">
                        <label>Nacionalidad:</label>
                        <input type="text" class="form-control" name="nacionalidad" value="{$autor->nacionalidad}">
                </div>
                <div class="col mt-4">
                         <input type="submit" class="btn btn-secondary" value="Confirmar edicion">
                </div>
           </div>

    </form>  

</div>      


{include file='templates/footer.tpl'}  

        