 {include file='templates/header.tpl'}    
 
 <h1>Libros segun su titulo</h1>
            <div>
                {foreach from=$libros item=$libro}
                    <h3>{$libro->nombre}
                        <a href="showLibroid/{$libro->idLibro}"><button>Ver Detalles</button></a>
                        <a href="deleteLibro/{$libro->idLibro}"><button>Borrar</button></a>
                        <a href="updateLibro/{$libro->idLibro}"><button>Editar</button></a>
                    </h3>
                {/foreach}
            </div>  

{include file='templates/footer.tpl'} 