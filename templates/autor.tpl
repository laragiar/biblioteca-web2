 {include file='templates/header.tpl'} 

<h1>Autores:</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nacionalidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$autores item=$autor}
                <tr>
                    <td>{$autor->nombre}</td> 
                    <td>{$autor->apellido}</td>
                    <td>{$autor->nacionalidad}</td>
                    <td><a href="deleteAutor/{$autor->idAutor}"><button>Borrar</button></a></td>
                    <td><a href="editAutor/{$autor->idAutor}"><button>Editar</button></a></td>
                    <td><a href="viewAutorID/{$autor->idAutor}"><button>Ver Libros</button></a></td>
                {/foreach}    
                </tr>
            </tbody>
        </table>
    </body>        
{include file='templates/footer.tpl'} 