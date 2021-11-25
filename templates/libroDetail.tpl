{include file='templates/header.tpl' }


<div class="">
    <div class="card text-center">
        <div class="card-header text-center" id="libro" data-id="{$libro->idLibro}" data-rol="{$rol}">
            <p class="tituloL m-4"><ins>{$libro->nombre}<ins></p>
        </div>

        <div class="card-body">
            {if isset ($libro->img)}
                <img class="rounded float-start" src="{$libro->img}" />
            {/if}
            <p class="text-card">Genero: {$libro->genero}</p>
            <p class="text-card">Autor:  {$libro->nombreA}{$libro->apellidoA}</p>
            <p class="text-card">Descripcion: {$libro->descripcion}</p>
            <p class="text-card">Editorial: {$libro->editorial}</p>
            
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <div class="m-2">
                <p> Buscar comentarios por puntaje </p>
                </div>
                <div class="d-flex"> 
                <form id="filter">
                    <select class="form-select" name="puntuacion">
                        <option value="">Todos</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="submit" id="btn-filter" value="Filtrar" class="btn btn-dark m-2">
                </form>
                </div>
            </div>

            <div class="card-body" id="app">
                {include file='templates/vue/comments.tpl'}
            </div>

        </div>  
            {if isset ($smarty.session.email)}

                <div class="card-body">
                    <form id="apiComment" class="form-group" data-user="{$id}" data-libro="{$libro->idLibro}">
                        <h5 class="m-3">Dejanos tu comentario acerca de este libro</h5>
                        <div class="col m-3">
                            <textarea class="w-100" rows="5" name="comment" placeholder="Escriba aqui su comentario"
                                required></textarea>
                        </div>
                        <div class="col m-3">
                            <select class="form-select w-25" name="puntuacion" id="puntuacion" required>
                                <option value="">Puntuar el libro</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col  m-3">
                            <button class="btn btn-secondary" id="btnAdd" type="submit">Enviar comentario</button>
                        </div>
                    </form>
                </div>
            {/if}
         
            <div class="card-body">
                <button class="btn btn-dark "><a href="showLibros?page=1" class="text-light">Regresar</a></button>
            </div>



        </div>

    </div>
</div>
<script src="js/comment.js"></script>