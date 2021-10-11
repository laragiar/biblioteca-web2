<?php
/* Smarty version 3.1.38, created on 2021-10-11 22:22:52
  from 'C:\xampp\htdocs\biblioteca-web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61649d1c7da779_43693785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06c65ece1a656d8f3f7c84c0ae76c0a97f4822a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\login.tpl',
      1 => 1633983767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/biblio.tpl' => 1,
  ),
),false)) {
function content_61649d1c7da779_43693785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<a href="insertLibro"><button>Insertar nuevo libro</button></a>
<a href="insertAutor"><button>Insertar nuevo autor</button></a>
<a href="logout"><button>Log out</button></a>  

<?php $_smarty_tpl->_subTemplateRender('file:templates/biblio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
