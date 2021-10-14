<?php
/* Smarty version 3.1.38, created on 2021-10-14 13:38:40
  from 'C:\xampp\htdocs\biblioteca-web2\templates\createAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_616816c03be080_16055229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0342c848bcebc5bdad1b8452a5154245ba789e11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\createAutor.tpl',
      1 => 1634211517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616816c03be080_16055229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
<div class=" container mt-4">
      <div class="card text-center w-90" >
        <form action="createAutor" method="POST">
            <div class="card-header">
              <p class="tituloL"><ins>Inserte nuevo autor:</ins></p>
            </div>
            <div class="card-body">
              <p class= "card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Nombre:</label></p>
              <input type="text" name="nombre" required>
              <p class="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Apellido:</label></p>
              <input type="text" name="apellido" required>
              <p class ="card-text"><label for="colFormLabel" class="col-sm-2 col-form-label">Nacionalidad:</label></p>
              <input type="text" name="nacionalidad" required>
              
            </div>
            <div class="card-body">
            <input type="submit" class="btn btn-dark" value="Crear Autor">
            </div> 
        </div> 
        </form> 
           
</div>
</body>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }
}
