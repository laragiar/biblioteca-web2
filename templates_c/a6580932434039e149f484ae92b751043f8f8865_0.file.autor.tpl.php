<?php
/* Smarty version 3.1.38, created on 2021-10-14 14:08:37
  from 'C:\xampp\htdocs\biblioteca-web2\templates\autor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61681dc5b95918_47863626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6580932434039e149f484ae92b751043f8f8865' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\autor.tpl',
      1 => 1634213315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61681dc5b95918_47863626 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<div class="container mt-4">
<p class="tituloL"><ins>Autores:<ins></p>
        <table class="table table-secondary table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nacionalidad</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['autor']->value->nacionalidad;?>
</td>
                    <td><a href="viewAutorID/<?php echo $_smarty_tpl->tpl_vars['autor']->value->idAutor;?>
"><button  class="btn btn-info text-light" >Ver Libros</button></a></td>
                    <td><a href="editAutor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->idAutor;?>
"><button class="btn btn-success text-light">Editar</button></a></td>
                    <td><a href="deleteAutor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->idAutor;?>
"><button  class="btn btn-danger text-light">Borrar</button></a></td>
                    
                    
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
                </tr>
            </tbody>
        </table>
    </body>        
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
</div><?php }
}
