<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-29 09:23:01
  from 'C:\laragon\www\tps\tp4\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a49bf50b70d9_35780307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1063ee6a2a3d0c4c6a4450a7951d2430b6e7f000' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp4\\templates\\success.tpl',
      1 => 1637945019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a49bf50b70d9_35780307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68751215861a49bf50b5a61_05446768', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13230744561a49bf50b69d6_54993670', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_68751215861a49bf50b5a61_05446768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_68751215861a49bf50b5a61_05446768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Success<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13230744561a49bf50b69d6_54993670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13230744561a49bf50b69d6_54993670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Success</h1>
<div id='main'>
<p> Vous êtes bien inscrit ! </p>
<?php
}
}
/* {/block 'body'} */
}
