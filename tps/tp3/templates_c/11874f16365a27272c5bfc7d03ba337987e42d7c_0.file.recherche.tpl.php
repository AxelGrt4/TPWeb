<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-26 09:31:53
  from 'C:\laragon\www\tps\tp3\templates\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6177cb097aee42_44173582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11874f16365a27272c5bfc7d03ba337987e42d7c' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp3\\templates\\recherche.tpl',
      1 => 1635240683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6177cb097aee42_44173582 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
 </head>
 <body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1>
    
    <table>
        <tr>
            <th> Artiste </th>
            <th> Album </th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
        <tr>
            <td> <a href="./artiste-<?php echo $_smarty_tpl->tpl_vars['album']->value[5];?>
-<?php echo $_smarty_tpl->tpl_vars['album']->value[2];?>
.html"><?php echo $_smarty_tpl->tpl_vars['album']->value[2];?>
</a></td>
            <td> <?php echo $_smarty_tpl->tpl_vars['album']->value[1];?>
</td>
        </tr>
        <?php
}
if ($_smarty_tpl->tpl_vars['album']->do_else) {
?>
        <p>La recherche n'a rien donner</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
 </body>
</html><?php }
}
