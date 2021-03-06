<?php

require_once './BiblioController/libroController.php';
require_once './BiblioController/autorController.php';
require_once './BiblioController/userController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; 
}

$params = explode('/', $action);

$libroController = new LibroController();
$autorController = new AutorController();
$userController = new UserController();


switch ($params[0]) {
    case 'registrarse':
        $userController->showRegistro();
        break;
    case 'registrarseControl':
        $userController->registrarseControl($userEmail,$userPassword);
        break;
    case 'login':
        $userController->showLogin();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'showUsers':
        $userController->showUsers();
        break;
    case 'updateUser':
        $userController->updateUser($params[1]);
        break;
    case 'deleteUser':
        $userController->deleteUser($params[1]);
        break;
    case 'verifyLogin':
        $userController->verifyLogin();
        break;
    case 'home': 
        $libroController->showHome(); 
        break;
    case 'showLibros':
        $libroController->showPagination(); 
        break;
    case 'showLibroid':
        $libroController->showLibroid($params[1]); 
        break;
    case 'insertLibro':
        $libroController->insertLibro();
        break;
    case 'createLibro':
        $libroController->createLibro();
        break; 
    case 'deleteLibro':
        $libroController->deleteLibro($params[1]);
        break;
    case 'deleteImagen':
        $libroController->deleteImagen($params[1]);
        break;
    case 'updateLibro':
        $libroController->updateLibro($params[1]);
        break; 
    case 'editLibro':
        $libroController->editLibro($params[1]);
        break; 
    case 'showAutor':
        $autorController->showAutor();
        break; 
    case 'createAutor':
        $autorController->createAutor();
        break; 
    case 'insertAutor':
        $autorController->insertAutor();
        break; 
    case 'deleteAutor':
        $autorController->deleteAutor($params[1]);
        break;
     case 'viewAutorID': 
        $autorController->viewAutorID($params[1]);
        break;
    case 'editAutor':
        $autorController->editAutor($params[1]);
        break; 
     case 'updateAutor':
        $autorController->updateAutor($params[1]);
        break; 
     case 'search': 
        $libroController->search(); 
        break;
    default:
        echo "404 page not found";
        break;
    }