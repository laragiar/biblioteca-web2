<?php
require_once './BiblioModel/commentModel.php';
require_once './BiblioView/apiView.php';
require_once './Helpers/AuthHelper.php';

class ApiController {
    private $modelComment;
    private $view;
    private $authHelper;
    
    public function __construct() {
      $this->modelComment = new commentModel();
      $this->view = new apiView();
      $this->authHelper = new authHelper();
    }

    function getComment($params = null){
      $idLibro = $params[":ID"];
      $comentarios = $this->modelComment->getCommentByLibro($idLibro);
      if($comentarios != '') {
        return $this->view->response($comentarios, 200);
      }else{
        return $this->view->response('Comentarios',"No se encontraron resultados", 404);
      }
    }
  

  function deleteComment($params = null) {
     if($this->authHelper->checkLoggedIn() && ($_SESSION['rol'] == 1)){
      $idComment = $params[":ID"];
      $comment = $this->modelComment->getComment($idComment);
        if (!empty ($comment) && isset($comment)) {
            $this->modelComment->delete($idComment);
            return $this->view->response("El comentario $idComment fue eliminado", 200);
        } else {
            return $this->view->response("El comentario $idComment no existe", 404);
        }
     }else{
      $this->view->response("Debes ser administrador para realizar esta operacion", 401);
     }
  }

function insertComment($params = null) {
  // obtengo el body del request (json)
  $body = $this->getBody();
  if (isset($body->descripcion) && isset($body->puntuacion) && isset($body->idUser) && isset($body->idLibro)){
    $id = $this->modelComment->insert($body->descripcion, $body->puntuacion, $body->idUser, $body->idLibro);
      if ($id != 0) {
        $this->view->response("El comentario de id=$id fue creado con exito", 200);
    } else {
        $this->view->response("El comentario no pudo ser creado", 500);
    }
  }else {
    return $this->view->response("Faltan datos para insertar el comentario", 404);
}
}



  function getCommentsByScore($params=null){
    $idLibro = $params[":ID"];
    $puntuacion = $params[':SCORE'];
    $comments = $this->model->getCommentsbyScore($idLibro,$puntuacion);
    if($comments){
      return $this->view->response($comments, 200);
    }
    else {
      return $this->view->response("Faltan datos para insertar el comentario", 404);
  }
}
  //Leer cuerpo del mensaje. Devuelve el body del request
    //Permite leer la entrada enviada en formato RAW
    //Similar a $_POST, excepto que:
    //No es un arreglo, es un string de los datos crudos
    //No importa que verbo se uso (POST, GET, PUT, ...)
    // Devuelve el body del request
    private function getBody() {
      $bodyString = file_get_contents("php://input"); //Convertir el string recibido a JSON
      return json_decode($bodyString); //Devuelve un objeto JSON
  }

}   

  
  



