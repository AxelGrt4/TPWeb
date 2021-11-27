<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-16 12:48:35
  from 'C:\laragon\www\tps\tp4\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6193a8a3e44565_63129105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8aa6655482db1e84a751ed446793a257e1d56d' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp4\\templates\\login.tpl',
      1 => 1637065788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6193a8a3e44565_63129105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11309663896193a8a3e2bb97_39919584', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11003166976193a8a3e2d853_26922330', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_11309663896193a8a3e2bb97_39919584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11309663896193a8a3e2bb97_39919584',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Login<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11003166976193a8a3e2d853_26922330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11003166976193a8a3e2d853_26922330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
<h1>Login</h1>
<p>
Contenu du template login.tpl
</p>
</div>
<form action="login" method="post">
<div>
        <br>
        <label for="Email"> Votre Email : </label>
        <br>
        <input type="email" name="Email" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Email'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
        <br>
        <label for="Motdepasse"> Mot de Passe : </label>
        <br>
        <input type="password" name="Motdepasse">
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Motdepasse'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
    <br>
    <input type="submit" value="Se connecter">
    </div>
</form>
<?php
}
}
/* {/block 'body'} */
}
