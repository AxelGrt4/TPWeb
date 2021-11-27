<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-26 08:25:29
  from 'C:\laragon\www\tps\tp3\templates\liste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6177bb797a4236_23407781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77b9f77d8b95f8526190c440635ffacaf080c829' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp3\\templates\\liste.tpl',
      1 => 1635236727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6177bb797a4236_23407781 (Smarty_Internal_Template $_smarty_tpl) {
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
    <p><?php echo $_smarty_tpl->tpl_vars['route']->value;?>
</p>
    <table>
        <tr>
            <th> Artiste </th>
            <th> Album </th>
            <th> Genre </th>
            <th> Date </th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value, 'album');
$_smarty_tpl->tpl_vars['album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->do_else = false;
?>
        <tr>
            <td><a href="./artiste-<?php echo $_smarty_tpl->tpl_vars['album']->value[5];?>
-<?php echo $_smarty_tpl->tpl_vars['album']->value[2];?>
.html"><?php echo $_smarty_tpl->tpl_vars['album']->value[2];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['album']->value[1];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['album']->value[3];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['album']->value[4];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
 </body>
</html><?php }
}
