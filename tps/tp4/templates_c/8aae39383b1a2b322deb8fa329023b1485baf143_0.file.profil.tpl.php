<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-26 16:40:46
  from 'C:\laragon\www\tps\tp4\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a10e0ee11676_87042993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aae39383b1a2b322deb8fa329023b1485baf143' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp4\\templates\\profil.tpl',
      1 => 1637944840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a10e0ee11676_87042993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207986694261a10e0ee097d8_86835974', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32126254161a10e0ee0a0d3_17932039', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_207986694261a10e0ee097d8_86835974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_207986694261a10e0ee097d8_86835974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_32126254161a10e0ee0a0d3_17932039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_32126254161a10e0ee0a0d3_17932039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profil']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'valeur', false, 'champs');
$_smarty_tpl->tpl_vars['valeur']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['champs']->value => $_smarty_tpl->tpl_vars['valeur']->value) {
$_smarty_tpl->tpl_vars['valeur']->do_else = false;
?>
        <h2><?php echo $_smarty_tpl->tpl_vars['champs']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['valeur']->value;?>
</p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
/* {/block 'body'} */
}
