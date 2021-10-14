<?php
/* Smarty version 3.1.38, created on 2021-10-14 05:43:50
  from 'C:\xampp\htdocs\biblioteca-web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6167a776016587_51985834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '612bca4977a5ae96209063127e68a62194cbe05d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\header.tpl',
      1 => 1634183026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6167a776016587_51985834 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
        <html lang="en">
        <head>
            <base href="<?php echo BASE_URL;?>
"/> 
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="styleD.css">
            <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        </head>
        <body class="bg-light">
           <div class="container-fluid">
          
                
           </div> 
           <div>
           <nav class="navbar navbar-dark bg-dark px-5">
           <div>
           <ul class="list-inline hover">
            <li  class="px-4 hover"><a href="home" class="mt-2 text-light">Home</a></li>
            <li class="px-4"><a href="showAutor" class="mt-2 text-light ">Autores</a></li>
            <li  class="px-4"><a href="showLibros" class="mt-2 text-light">Libros</a></li>
             
            <li  class="px-4"><a href="insertAutor" class="mt-2 text-light">Insertar nuevo autor</a></li>
            <li  class="px-4"><a href="insertLibro"  class="mt-2 text-light">Insertar nuevo libro </a></li>
       </ul> 
         </div>
            <div>
            <ul class="nav justify-content-end">
            <li  class="px-4"><a href="registrarse" class="mt-2 text-light float-right"><ins>Registrarse</ins></p> </a></li>
            <li  class="px-4 "> <a href="login"class="mt-2 text-light"><ins>Login</ins></a></li>
            <li  class="px-4 "><a href="logout"class="mt-2 text-light"><ins>Log Out</ins></a></li>
            </ul>
            </div>
      
  


</nav>
 </div><?php }
}
