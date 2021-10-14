<?php
/* Smarty version 3.1.38, created on 2021-10-14 06:41:54
  from 'C:\xampp\htdocs\biblioteca-web2\templates\libroDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6167b5127e1ca7_51165195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffe7468c5b99e4dc86aa1a717ff5aba4471e2a96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\libroDetail.tpl',
      1 => 1634186513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6167b5127e1ca7_51165195 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['log']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('log'=>$_prefixVariable1), 0, false);
?>  


<div class="mt-4">
<div class="card text-center">
  <div class="card-header">
     <p class="tituloL"><ins><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
<ins></p>
  </div>
  <div class="card-body">
   
    <p class= "card-text">Genero: <?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
</p>
    <p class="card-text">Autor: <?php echo $_smarty_tpl->tpl_vars['libro']->value->nombreA;
echo $_smarty_tpl->tpl_vars['libro']->value->apellidoA;?>
</p>
    <p class ="card-text">Descripcion: <?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</p>
    <p class="card-text">Editorial: <?php echo $_smarty_tpl->tpl_vars['libro']->value->editorial;?>
</p> 

     <button class="btn btn-dark "><a href="showLibros" class ="text-light">Regresar</a></button> 
   
  
  </div>
  
</div>
</body>
</div><?php }
}
