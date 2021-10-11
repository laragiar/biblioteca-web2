{include file='templates/header.tpl'}         
            <h1>{$titulo}</h1>
            <h4>Visite los libros disponibles</h4>           
            <div>
            INSERTE SU BUSQUEDA: 
             <select name="filtro" id="select-filtro">
                <option selected>Elegir filtro</option> 
                <option value="titulo">Titulo</option>
                <option value="autor">Autor</option>
                <option value="genero">Genero</option>
              </select>
            <form id="select-titulo"  action="search/titulo" method="POST">
                <input type="text" name="nombre" placeholder="Titulo libro">
                <input type="submit" id="btn-titulo" name="Filtrar">
            </form>
            <form id="select-autor" action="search/autor" method="POST">
                <select name="autor" id="select-autor">
                   {foreach from=$autor item=$autorA} 
                     <option>{$autorA->nombre}{$autorA->apellido}</option>
                    {/foreach}
                            
                </select>
                <input type="submit" id="btn-autor" name="Filtrar">
            </form>
            <form id="select-genero" action="search/genero" method="POST">
            <select name="genero" id="select-genero">
            {foreach from=$libros item=$libro}
                <option>{$libro->genero}</option>
            {/foreach}
        
            
            </select>
            <input type="submit" id="btn-genero" name="Filtrar">
        
            </div> 
            <table>
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Genero</th>
                        <th>Editorial</th>
                        <th>Descripcion</th>
                        <th>Autor</th>
                    </tr>
                </thead>
                <tbody>
                
        {foreach from=$libros item=$libro}
           <tr><td>{$libro->nombre}</td>
                <td>{$libro->genero}</td>
                <td>{$libro->editorial}</td>
                <td>{$libro->descripcion}</td>
                <td><a href="viewAutorID/{$libro->idAutor}">{$libro->nombreA}{$libro->apellidoA}</a></td>                     
        {/foreach}
        
            </tr>
            </tbody>
        </table>

</body>
</html>