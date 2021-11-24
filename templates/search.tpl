{include file='templates/header.tpl'}
<div class="container-fluid  mt-4">
    <h1 class="text-center p-3">{$titulo}</h1>

    <div class="container-fluid">
        <div>
            <div class="m-2">
                <p class="tituloL"><ins>Visite los libros disponibles</ins></p>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <div class="m-1 ">
                <p class="subtituloL">Ingrese su busqueda</p>
                </div>
                <form id="select-titulo" action="search" method="POST">
                    <input   type="text" name="search" placeholder="Buscar por">
                    <input class="btn-dark" type="submit" id="btn-titulo" name="Filtrar">
                </form>
                </div>
             </div>
             </div>
                    <div>
                        <table class="table table-hover">
                            <thead class="bg-secondary text-center text-light">
                                <tr>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Editorial</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Autor</th>
                                </tr>
                            </thead>
                            <tbody>

                                {foreach from=$libros item=$libro}
                                    <tr scope="row">
                                        <td>{$libro->nombre}</td>
                                        <td>{$libro->genero}</td>
                                        <td>{$libro->editorial}</td>
                                        <td>{$libro->descripcion}</td>
                                        <td><a class="text-dark"
                                                href="viewAutorID/{$autor->idAutor}"><ins>{$autor->nombre}{$autor->apellido}</ins></a>
                                        </td>
                                    {/foreach}

                                </tr>
                            </tbody>
                        </table>
                        </div>
</div>
{include file='templates/footer.tpl'}