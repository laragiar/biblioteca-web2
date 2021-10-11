<?php
/* Smarty version 3.1.38, created on 2021-10-11 17:39:21
  from 'C:\xampp\htdocs\biblioteca-web2\templates\editLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61645aa9444c52_93202962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5925b6430c39c29a984a05d80b30a604ab864f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\editLibro.tpl',
      1 => 1633966698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61645aa9444c52_93202962 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

        <form action="editLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->idLibro;?>
" method="POST">           
            Nombre:<input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
">
            Genero:<input type="text" name="genero" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
">
            Editorial:<input type="text" name="editorial" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->editorial;?>
">
            Descripcion <textarea name="descripcion" ><?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</textarea>
            <input type="submit" value="Finalizar edicion">
        </form>        
    </body>
        
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
