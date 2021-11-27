<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-26 15:21:37
  from 'C:\laragon\www\tps\tp4\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61a0fb81714f80_22610101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9fe7f14f036aafc5d4210f84bf9096098042035' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp4\\templates\\layout.tpl',
      1 => 1637940094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a0fb81714f80_22610101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109994165361a0fb81601141_82971277', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9840967361a0fb8163b6a3_49322975', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29986200161a0fb8163fb63_78844614', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94182023861a0fb81714893_16625767', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_109994165361a0fb81601141_82971277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_109994165361a0fb81601141_82971277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_9840967361a0fb8163b6a3_49322975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9840967361a0fb8163b6a3_49322975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_29986200161a0fb8163fb63_78844614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_29986200161a0fb8163fb63_78844614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>Menu de navigation générique défini dans layout.tpl</p>
<?php if ((isset($_smarty_tpl->tpl_vars['Nom']->value))) {?>
<h1>Bienvenue <?php echo $_smarty_tpl->tpl_vars['Nom']->value;?>
</h1>
<a href='./'>index</a>
<a href='profil'>profil</a>
<a href='logout'>Deconnexion</a>
<?php } else { ?>
<a href='./'>index</a>
<a href='register'>inscription</a> 
<a href='login'>connexion</a>
<a href='profil'>profil</a>
<?php }?>  
<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_94182023861a0fb81714893_16625767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_94182023861a0fb81714893_16625767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
