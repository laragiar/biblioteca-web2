<?php
/* Smarty version 3.1.38, created on 2021-10-11 17:38:24
  from 'C:\xampp\htdocs\biblioteca-web2\templates\formlibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61645a70ef4f82_48772173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46092d4753316decc4906682a9445d7f7be96007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\formlibro.tpl',
      1 => 1633966614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61645a70ef4f82_48772173 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<form action="createLibro" method="POST">
            <p>Completar campos para insertar un nuevo libro:</p>
            Nombre:<input type="text" name="nombre" required>
            Genero:<input type="text" name="genero" required>
            Editorial:<input type="text" name="editorial" required>
            Descripcion <textarea name="descripcion"></textarea>
            <select name="idAutor">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autor']->value, 'autorA');
$_smarty_tpl->tpl_vars['autorA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autorA']->value) {
$_smarty_tpl->tpl_vars['autorA']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['autorA']->value->idAutor;?>
-<?php echo $_smarty_tpl->tpl_vars['autorA']->value->nombre;
echo $_smarty_tpl->tpl_vars['autorA']->value->apellido;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
           <input type="submit" value="Insertar libro">
        </form>        
        </body>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
