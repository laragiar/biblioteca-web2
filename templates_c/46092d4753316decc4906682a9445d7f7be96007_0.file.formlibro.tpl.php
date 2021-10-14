<?php
/* Smarty version 3.1.38, created on 2021-10-14 14:10:13
  from 'C:\xampp\htdocs\biblioteca-web2\templates\formlibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61681e257a11a5_63946214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46092d4753316decc4906682a9445d7f7be96007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\formlibro.tpl',
      1 => 1634213404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61681e257a11a5_63946214 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
                
<div class=" container mt-4">
<div class="card text-center w-90">
<form action="createLibro" method="POST">
            <div class="card-header">
                <p class="tituloL"><ins>Complete los campos para insertar un nuevo libro:</ins></p>
                <p class="text-sm">Si el autor no se encuentra registrado, debera agregarlo previamente</p>
            </div>
            <div class="card-body">
                <p class= "card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Nombre:</label></p>
                <input type="text" name="nombre" required>
                <p class="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Genero:</label></p>
                <input type="text" name="genero" required>
                <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Editorial:</label></p>
                <input type="text" name="editorial" required>
                <div>
                <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Descripcion:</label></p>
                <textarea type="text" name="descripcion"></textarea>
                <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Autor</label></p>
                <select name="idAutor">
                        <option class="text-center">Seleccionar autor</option>
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
                </select>
                <div class="card-body">
                 <input type="submit" class="btn btn-dark" value="Crear Libro">
                </div> 
            </div> 
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
