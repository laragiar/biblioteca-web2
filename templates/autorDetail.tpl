{include file='templates/header.tpl'}           
    <div class="mt-4">
        <div class="card text-center">
            <div class="card-header">  
                <h1 class="tituloL">{$autor->nombre}{$autor->apellido}</h1> 
                <h6>Sus libros:</h6>
            </div>
            <div class="card-body">
                {foreach from=$libros item=$libro}
                    <p class="card-text">{$libro->nombre}</p>
                {/foreach}
            </div>
        </div>
   
        <div class="card-body">
            <button class="btn btn-dark"><a href="showAutor" class="text-light ">Regresar</a></button>
        </div>
    </div>



 