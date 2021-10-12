<?php
/* Smarty version 3.1.38, created on 2021-10-12 23:20:40
  from 'C:\xampp\htdocs\biblioteca-web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6165fc28273e11_04012707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612bca4977a5ae96209063127e68a62194cbe05d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\header.tpl',
      1 => 1634073637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165fc28273e11_04012707 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="<?php echo BASE_URL;?>
"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        </head>
        <body>
           <div>
            <button><a href="home">Home</a></button>
            <button><a href="showAutor">Autores</a></button>
            <button><a href="showLibros">Libros</a></button>
            <?php $_prefixVariable1 = true;
$_smarty_tpl->_assignInScope('log', $_prefixVariable1);
if ($_prefixVariable1) {?>
            <button><a href="insertLibro">Insertar nuevo libro</a></button>
            <button><a href="insertAutor">Insertar nuevo autor</a></button>   
            <button><a href="logout">Log out</a></button> 
            <?php } else { ?>
            <button><a href="login">Login</a></button>
            <button><a href="registrarse">Registrarse</a></button> 
            <?php }?>       
           </div> <?php }
}
