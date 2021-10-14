 {include file='templates/header.tpl'} 
<div class=" container mt-4">
    <div class=" w-100" > 
       <p class="tituloL">Editando Libro:</p>  
        <form action="editLibro/{$libro->idLibro}" method="POST">           
            <div class="form-row">
                <div class="col">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="{$libro->nombre}">
                </div>
                <div class="col">
                    <label>Genero:</label>
                    <input type="text" class="form-control" name="genero" value="{$libro->genero}">
                </div>
                <div class="col">
                    <label>Editorial:</label>
                    <input type="text" class="form-control" name="editorial" value="{$libro->editorial}">
                </div>
                <div class="col">
                    <label>Descripcion:</label> 
                    <textarea  class="form-control" rows="5" name="descripcion" >{$libro->descripcion}</textarea>
                </div>
                <div class="col mt-4">
                    <input type="submit" class="btn btn-secondary" value="Finalizar edicion">
                </div>
           </div>
        </form> 
          
  </div>      

        
{include file='templates/footer.tpl'} 

