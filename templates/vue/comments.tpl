{literal}

    <h4>{{titulo}}</h4>
    <div class="container mt-4">
        <div class="list-group">
            <div v-for="comentario in comentarios" class="list-group-item list-group-item-action d-flex ">
                <div class="d-flex justify-content-between">
                    <p class="m-2">{{comentario.descripcion}}</p>
                    <p class="m-2">Puntuo con: {{comentario.puntuacion}} estrellas</p>
                </div>
                <div class="ml-6">
                    <div v-if="rol == '1'">
                        <button class="btn btn-secondary" v-on:click="eliminar"
                            v-bind:id="`${comentario.id}`">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/literal}