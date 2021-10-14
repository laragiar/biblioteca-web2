{include file='templates/header.tpl'}    
<div class=" container mt-4">
      <div class="card text-center w-90" >
        <form action="createAutor" method="POST">
            <div class="card-header">
              <p class="tituloL"><ins>Inserte nuevo autor:</ins></p>
            </div>
            <div class="card-body">
              <p class= "card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Nombre:</label></p>
              <input type="text" name="nombre" required>
              <p class="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Apellido:</label></p>
              <input type="text" name="apellido" required>
              <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Nacionalidad:</label></p>
              <input type="text" name="nacionalidad" required>
              
            </div>
            <div class="card-body">
            <input type="submit" class="btn btn-dark" value="Crear Autor">
            </div> 
         
        </form>
       </div>   
           
</div>



{include file='templates/footer.tpl'} 
