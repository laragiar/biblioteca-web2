"use strict"

const API_URL="api/comentarios/";
    let rolUser = document.querySelector("#libro").dataset.rol;

    let app=  new Vue({
        el: '#app', //elemento donde actua vue
        data:{
            titulo:"Comentarios del libro",
            comentarios:[],
            rol: rolUser
        },
        methods: {
            eliminar: function (e) {
                deleteComment(e.target.id)
            }
        }
    });

    async function getComentarios(){
        try{
            let idLibro = document.querySelector("#libro").dataset.id;
            //fetch para traer todos los comentarios
            let response= await fetch (API_URL + idLibro);
            let comentariosApi= await response.json();
            app.comentarios=comentariosApi;
            console.log(response);
        }catch (e){
            console.log(e);        
        }
    }
    getComentarios();


    async function deleteComment(idComment) {
        let url = (API_URL + idComment);
        try {
            let response = await fetch(url, {
                method: 'DELETE'
            });
            if(response.ok){
                getComentarios();
            }
           console.log(response);
        } catch (e) {
            console.log(e);
        }
       
    }

    document.addEventListener('DOMContentLoaded', function () {
    let formComment = document.querySelector("#apiComment");
    formComment.addEventListener("submit", function (e) {
        e.preventDefault();
    });

    let btnAddComment = document.querySelector("#btnAdd");
    btnAddComment.addEventListener("click", addComment);
    


    function commentData() {
        let formData = new FormData(formComment);
        let idLibro = document.querySelector("#apiComment").dataset.libro;
        let idUser = document.querySelector("#apiComment").dataset.user;
        let descripcion = formData.get("comment");
        let puntuacion = Number(formData.get("puntuacion"));
        if (descripcion != '' && puntuacion != 0) {
            let newComment = {
                "descripcion": descripcion,
                "puntuacion": puntuacion,
                "idLibro": idLibro,
                "idUser": idUser,
            }
            formComment.reset();
            return newComment;
        }
    }

    async function addComment() {
        let newComment = commentData();
        try {
            let response = await fetch(API_URL, {
                "method": "POST",
                "headers": {
                    'Content-Type': 'application/json'
                },
                "body": JSON.stringify(newComment),
            });
            if (response.ok) {
                console.log("Comentario creado");
            }
        } catch (response) {
            console.log("Error de conexion");
        }
        getComentarios();
    }


});