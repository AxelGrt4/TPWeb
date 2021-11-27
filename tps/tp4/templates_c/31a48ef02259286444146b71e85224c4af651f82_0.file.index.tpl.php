<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-23 13:40:35
  from 'C:\laragon\www\tps\tp4\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619cef535919e6_79818364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a48ef02259286444146b71e85224c4af651f82' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp4\\templates\\index.tpl',
      1 => 1637674826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619cef535919e6_79818364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_269927655619cef5358ff50_35813842', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220106128619cef53590cb0_17574468', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_269927655619cef5358ff50_35813842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_269927655619cef5358ff50_35813842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_220106128619cef53590cb0_17574468 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_220106128619cef53590cb0_17574468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Home</h1>
Contenu du site, défini dans le template index.tpl
</div>
<?php
}
}
/* {/block 'body'} */
}
