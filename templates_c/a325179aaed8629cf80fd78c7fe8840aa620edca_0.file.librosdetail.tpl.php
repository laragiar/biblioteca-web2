<?php
/* Smarty version 3.1.38, created on 2021-10-11 20:06:10
  from 'C:\xampp\htdocs\biblioteca-web2\templates\librosdetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61647d127c09c0_54410289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a325179aaed8629cf80fd78c7fe8840aa620edca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\librosdetail.tpl',
      1 => 1633966609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61647d127c09c0_54410289 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
    <div>
        <h2><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</h2>
        <p>Genero:<?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
</p>
        <p>Autor:<?php echo $_smarty_tpl->tpl_vars['libro']->value->nombreA;
echo $_smarty_tpl->tpl_vars['libro']->value->apellidoA;?>
</p>
        <p>Descripcion:<?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</p>
        <p>Editorial:<?php echo $_smarty_tpl->tpl_vars['libro']->value->editorial;?>
</p>           
    </div>  
    </body>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
