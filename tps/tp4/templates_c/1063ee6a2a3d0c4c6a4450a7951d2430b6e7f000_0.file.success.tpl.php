<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-15 16:46:39
  from 'C:\laragon\www\tps\tp4\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61928eef8c0ed0_74910365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1063ee6a2a3d0c4c6a4450a7951d2430b6e7f000' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp4\\templates\\success.tpl',
      1 => 1636994798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61928eef8c0ed0_74910365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146489647261928eef8be045_01345132', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136986435861928eef8bfe73_04557651', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_146489647261928eef8be045_01345132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_146489647261928eef8be045_01345132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Success<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_136986435861928eef8bfe73_04557651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_136986435861928eef8bfe73_04557651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Success</h1>
<div id='main'>
<p> Bravo Chacal </p>
<?php
}
}
/* {/block 'body'} */
}
