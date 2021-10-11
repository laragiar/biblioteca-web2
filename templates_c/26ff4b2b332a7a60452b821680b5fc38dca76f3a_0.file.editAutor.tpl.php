<?php
/* Smarty version 3.1.38, created on 2021-10-11 20:56:49
  from 'C:\xampp\htdocs\biblioteca-web2\templates\editAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_616488f1881691_08589242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ff4b2b332a7a60452b821680b5fc38dca76f3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\editAutor.tpl',
      1 => 1633978466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616488f1881691_08589242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
    <form action="updateAutor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->idAutor;?>
" method="POST">
            <p>Editando Autor:</p>
            Nombre:<input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
">
            Apellido:<input type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
">
            Nacionalidad:<input type="text" name="nacionalidad" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->nacionalidad;?>
">
            <input type="submit" value="Confirmar edicion">
    </form>        
</body>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  <?php }
}
