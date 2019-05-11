<?php
/* Smarty version 3.1.33, created on 2019-05-11 00:09:25
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\UserPanelContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd5f69582a8e8_54881773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e276a4c5fe3d1add840c8af373604ab48f850fc' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\UserPanelContainer\\up.tpl',
      1 => 1557526161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd5f69582a8e8_54881773 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home'>Strona Powitalna</a> | 
	<b>Autologowanie</b> 
<?php if (!isset($_smarty_tpl->tpl_vars['autologin']->value)) {?>
<b>wyłączone:</b> <a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
autologin_on'>Włącz</a>
<?php } else { ?>
<b>włączone:</b> <a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
autologin_off'>Wyłącz</a>
<?php }?> | 
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
authors'>Rozliczenia Fabuł</a> | 
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout'>Wyloguj się</a>
</center><?php }
}
