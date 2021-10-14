<?php
/* Smarty version 3.1.38, created on 2021-10-13 22:21:32
  from 'C:\xampp\htdocs\biblioteca-web2\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61673fcce6c4d8_38956156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22e7fcf2eef3dab07550a6fe7d0d5362c9b88b82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\libros.tpl',
      1 => 1634156486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61673fcce6c4d8_38956156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    


<div class="container mt-4">
<p class="tituloL"><ins>Libros segun su titulo</ins></p>

        <table class="table table-secondary table-striped">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <thead>
                <tr>
                </tr>
            </thead>
            <tbody>
              
                <tr>
                 <th><p class="subtituloL"> <?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</th>
                   
                    <td> <a href="showLibroid/<?php echo $_smarty_tpl->tpl_vars['libro']->value->idLibro;?>
"><button class="btn btn-info text-light">Ver Detalles</button></a>
                    <a href="updateLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->idLibro;?>
"><button class="btn btn-success">Editar</button></a>
                   <a href="deleteLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->idLibro;?>
"><button class="btn btn-danger">Borrar</button></a></td>
                
                </tr>
            </tbody>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
        </table>
    </body>        
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 

</div><?php }
}
