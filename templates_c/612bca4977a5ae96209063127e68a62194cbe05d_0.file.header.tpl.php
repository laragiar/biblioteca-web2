<?php
/* Smarty version 3.1.38, created on 2021-10-11 22:27:37
  from 'C:\xampp\htdocs\biblioteca-web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61649e399bdc13_73608729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612bca4977a5ae96209063127e68a62194cbe05d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\header.tpl',
      1 => 1633983908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61649e399bdc13_73608729 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="<?php echo BASE_URL;?>
"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        </head>
        <body>
            <a href="home"><button>Home</button></a>
            <a href="showAutor"><button>Autores</button></a>
            <a href="showLibros"><button>Libros</button></a>
            <a href="insertLibro"><button>Insertar nuevo libro</button></a>
            <a href="insertAutor"><button>Insertar nuevo autor</button></a>
            <button><a href="login">Login</a></button>
            <button><a href="registrarse">Registrarse</a></button>   
            <a href="logout"><button>Log out</button></a>  
                       <?php }
}
