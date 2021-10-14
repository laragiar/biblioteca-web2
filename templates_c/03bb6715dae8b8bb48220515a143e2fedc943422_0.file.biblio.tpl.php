<?php
/* Smarty version 3.1.38, created on 2021-10-13 22:27:49
  from 'C:\xampp\htdocs\biblioteca-web2\templates\biblio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_616741458768a1_67485847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03bb6715dae8b8bb48220515a143e2fedc943422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\biblio.tpl',
      1 => 1634156828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_616741458768a1_67485847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('admin'=>$_smarty_tpl->tpl_vars['admin']->value), 0, false);
?>         
            <div class="container-fluid  mt-4">
            <h1 class="text-center p-3"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1> 
                     
            <div class="container-fluid">
            <p class="tituloL"><ins>Visite los libros disponibles</ins></p>
             
            <table class="table table-hover">
                <thead class="bg-secondary text-center text-light">
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Autor</th>
                    </tr>
                </thead>
                <tbody>
                
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
           <tr scope="row"><td><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->editorial;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['libro']->value->descripcion;?>
</td>
                <td><a class="text-dark" href="viewAutorID/<?php echo $_smarty_tpl->tpl_vars['libro']->value->idAutor;?>
"><ins><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombreA;
echo $_smarty_tpl->tpl_vars['libro']->value->apellidoA;?>
</ins></a></td>                     
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
            </tr>
            </tbody>
        </table>
        </div>
</body>
</html><?php }
}
