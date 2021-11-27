<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-15 16:34:45
  from 'C:\laragon\www\tps\tp4\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61928c25a20820_30235942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce9229291964891d9b041401b070ef3fb5199fc7' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\tp4\\templates\\register.tpl',
      1 => 1636994079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61928c25a20820_30235942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184761495961928c259e6a34_91505285', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55645819661928c259e7ef8_85422148', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_184761495961928c259e6a34_91505285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_184761495961928c259e6a34_91505285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Register<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_55645819661928c259e7ef8_85422148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_55645819661928c259e7ef8_85422148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Register</h1>
<div id='main'>
<p> 
<form action="register" method="post">
    <div>
        <label for="Nom"> Votre nom : </label>
        <br>
        <input type="text" name="Nom" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Nom'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

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
    <label for="Pays"> Votre Pays : </label>
    <br>
    <input type="text" name="Pays" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Pays'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Pays'])===null||$tmp==='' ? '' : $tmp);?>

    </div>
    
    <div>
    <br>
    <label for="Ville"> Votre Ville : </label>
    <br>
    <input type="text" name ="Ville" value='<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['Ville'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['messages']->value['Ville'])===null||$tmp==='' ? '' : $tmp);?>

    </div>

    <div>
    <br>
    <input type="submit" value="S'inscrire">
    </div>

</form>
</div>
<?php
}
}
/* {/block 'body'} */
}
