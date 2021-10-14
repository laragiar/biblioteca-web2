{include file='templates/header.tpl' log={$log} }  


<div class="mt-4">
<div class="card text-center">
  <div class="card-header">
     <p class="tituloL"><ins>{$libro->nombre}<ins></p>
  </div>
  <div class="card-body">
   
    <p class= "card-text">Genero: {$libro->genero}</p>
    <p class="card-text">Autor: {$libro->nombreA}{$libro->apellidoA}</p>
    <p class ="card-text">Descripcion: {$libro->descripcion}</p>
    <p class="card-text">Editorial: {$libro->editorial}</p> 

     <button class="btn btn-dark "><a href="showLibros" class ="text-light">Regresar</a></button> 
   
  
  </div>
  
</div>

</div>