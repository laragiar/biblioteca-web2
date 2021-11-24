<?php

require_once 'libs/route.php';
require_once './BiblioController/apiController.php';


$router = new Router();


$router->addRoute('comentarios/:ID', 'GET', 'apiController', 'getComment');                                                               
$router->addRoute('comentarios', 'POST', 'apiController', 'insertComment');
$router->addRoute('comentarios/:ID', 'DELETE', 'apiController', 'deleteComment');
$router->addRoute('comentarios/:ID/:SCORE', 'GET', 'apiController', 'getCommentsByScore');


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

