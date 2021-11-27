<?php
/* Smarty version 3.1.34-dev-7, created on 2021-10-25 15:56:00
  from 'C:\laragon\www\tps\tp3\templates\artiste.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6176d390cfa5e7_16359786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38d465ccfe7fe693883271469711a9aabd464b35' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp3\\templates\\artiste.tpl',
      1 => 1635177358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176d390cfa5e7_16359786 (Smarty_Internal_Template $_smarty_tpl) {
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
            <td> <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
 </td>
        </tr>
    </table>
 </body>
</html><?php }
}
