 {include file='templates/header.tpl'} 
                
<div class=" container mt-4">
<div class="card text-center w-90">
<form action="createLibro" method="POST">
            <div class="card-header">
                <p class="tituloL"><ins>Complete los campos para insertar un nuevo libro:</ins></p>
                <p class="text-sm">Si el autor no se encuentra registrado, debera agregarlo previamente</p>
            </div>
            <div class="card-body">
                <p class= "card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Nombre:</label></p>
                <input type="text" name="nombre" required>
                <p class="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Genero:</label></p>
                <input type="text" name="genero" required>
                <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Editorial:</label></p>
                <input type="text" name="editorial" required>
                <div>
                <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Descripcion:</label></p>
                <textarea  id="colFormLabel" rows="6" type="text" name="descripcion"></textarea>
                <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Autor</label></p>
                <select name="idAutor" required>  
                        <option value="" class="text-center">Seleccionar autor</option>
                    {foreach from=$autor item=$autorA}
                        <option>{$autorA->idAutor}-{$autorA->nombre}{$autorA->apellido}</option>
                    {/foreach}
                </select>
                <div class="card-body">
                 <input type="submit" class="btn btn-dark" value="Crear Libro">
                </div> 
            </div> 
</form>
</div>
{include file='templates/footer.tpl'} 

