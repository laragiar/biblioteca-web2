{literal}

    <h4>{{titulo}}</h4>
    <div class="container mt-4">
        <div class="list-group">
            <!-- si esta logeado le permito ordenar/filtrar comentarios 
     <div  v-if="rol != -1">

    <form id="filterForm" v-on:submit="filter($event)">
        Muestre los comentarios segun el puntaje deseado:
        <select name="score" v-model="selected">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" value="Filtrar">
    </form>  -->
            <div v-for="comentario in comentarios" class="list-group-item list-group-item-action d-flex">
                <p class="m-2">{{comentario.descripcion}}</p>
                <p class="m-2">Puntuacion: {{comentario.puntuacion}}</p>
                <div class="ml-6">
                    <div v-if="rol == '1' ">
                        <button class="btn btn-secondary" v-on:click="eliminar"
                            v-bind:id="`${comentario.id}`">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/literal}