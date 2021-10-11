  {include file='templates/header.tpl'} 
    <div>
        <h2>{$libro->nombre}</h2>
        <p>Genero:{$libro->genero}</p>
        <p>Autor:{$libro->nombreA}{$libro->apellidoA}</p>
        <p>Descripcion:{$libro->descripcion}</p>
        <p>Editorial:{$libro->editorial}</p>           
    </div>  
    </body>

{include file='templates/footer.tpl'} 