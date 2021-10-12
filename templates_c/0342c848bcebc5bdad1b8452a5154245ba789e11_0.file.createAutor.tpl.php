<?php
/* Smarty version 3.1.38, created on 2021-10-12 22:55:06
  from 'C:\xampp\htdocs\biblioteca-web2\templates\createAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6165f62a4d07a8_56439180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0342c848bcebc5bdad1b8452a5154245ba789e11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\createAutor.tpl',
      1 => 1634050188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165f62a4d07a8_56439180 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php ob_start();
echo $_smarty_tpl->tpl_vars['log']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('log'=>$_prefixVariable1), 0, false);
?>    
   
    <form action="createAutor" method="POST">
        <p>INSERTE AUTOR:</p>
        Nombre:<input type="text" name="nombre" required>
        Apellido:<input type="text" name="apellido" required>
        Nacionalidad:<input type="text" name="nacionalidad" required>
        <input type="submit" value="Crear Autor">
    </form>        
</body>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                <?php }
}
