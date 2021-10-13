<?php
/* Smarty version 3.1.38, created on 2021-10-13 18:12:52
  from 'C:\xampp\htdocs\biblioteca-web2\templates\biblio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61670584009c14_50232438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03bb6715dae8b8bb48220515a143e2fedc943422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca-web2\\templates\\biblio.tpl',
      1 => 1634141570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_61670584009c14_50232438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('admin'=>$_smarty_tpl->tpl_vars['admin']->value), 0, false);
?>         
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1> 
            <h4>Visite los libros disponibles</h4>           
            <div>
            INSERTE SU BUSQUEDA: 
             <select name="filtro" id="select-filtro">
                <option selected>Elegir filtro</option> 
                <option value="titulo">Titulo</option>
                <option value="autor">Autor</option>
                <option value="genero">Genero</option>
              </select>
            <form id="select-titulo"  action="search/titulo" method="POST">
                <input type="text" name="nombre" placeholder="Titulo libro">
                <input type="submit" id="btn-titulo" name="Filtrar">
            </form>
            <form id="select-autor" action="search/autor" method="POST">
                <select name="autor" id="select-autor">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autor']->value, 'autorA');
$_smarty_tpl->tpl_vars['autorA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autorA']->value) {
$_smarty_tpl->tpl_vars['autorA']->do_else = false;
?> 
                     <option><?php echo $_smarty_tpl->tpl_vars['autorA']->value->nombre;
echo $_smarty_tpl->tpl_vars['autorA']->value->apellido;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            
                </select>
                <input type="submit" id="btn-autor" name="Filtrar">
            </form>
            <form id="select-genero" action="search/genero" method="POST">
            <select name="genero" id="select-genero">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <option><?php echo $_smarty_tpl->tpl_vars['libro']->value->genero;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
            
            </select>
            <input type="submit" id="btn-genero" name="Filtrar">
        
            </div> 
            <div class="container-fluid">
            <table class="table table-hover">
                <thead class="bg-dark-25">
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
                <td><a href="viewAutorID/<?php echo $_smarty_tpl->tpl_vars['libro']->value->idAutor;?>
"><?php echo $_smarty_tpl->tpl_vars['libro']->value->nombreA;
echo $_smarty_tpl->tpl_vars['libro']->value->apellidoA;?>
</a></td>                     
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
