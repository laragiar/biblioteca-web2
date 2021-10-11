<?php
/* Smarty version 3.1.38, created on 2021-10-11 19:53:52
  from 'C:\xampp\htdocs\biblioteca-web2\templates\autordetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61647a3017b721_33921062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '590b9608f2603853ad4c76c257badaa35b909569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\autordetail.tpl',
      1 => 1633974829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61647a3017b721_33921062 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>           
            
            <h1><?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;
echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
</h1> 
            <h3><?php echo $_smarty_tpl->tpl_vars['autor']->value->nacionalidad;?>
</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <h3><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</h3>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
