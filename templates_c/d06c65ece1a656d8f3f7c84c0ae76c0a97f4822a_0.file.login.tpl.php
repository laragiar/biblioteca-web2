<?php
/* Smarty version 3.1.38, created on 2021-10-13 16:59:09
  from 'C:\xampp\htdocs\biblioteca-web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6166f43d065b57_92016711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd06c65ece1a656d8f3f7c84c0ae76c0a97f4822a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\login.tpl',
      1 => 1634137147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_6166f43d065b57_92016711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid ">
<section class="container-fluid">
<h2 class="title">Ingrese a su cuenta:</h2>
<div class="row">
       <div class="col-12 col-sm-6 col-md-3 p-2">   
        <form action="verifyLogin" method="post">
            <div class="form-group mt-2">
            <label for="inputEmail" class="col-form-label">Email: </label> 
            <input type="email" name="email" class="form-control" id="inputEmail" required>
            </div>
            <div class="form-group mt-2">
            <label for="inputPass" class="col-form-label">Contraseña: </label>
            <input type="password" name="password" class="form-control" id="inputPass" required>
            </div>
            <div class="mt-3">
            <button type="submit" class="btn btn-dark">Ingresar</button>
            </div>
        </form>
        <h3 class="d-flex mt-3"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
        </div>    
    </div>        
</section>
</div>


<?php }
}
