<?php
/* Smarty version 3.1.33, created on 2019-05-10 17:46:27
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\MainContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd59cd3de9810_72491556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d2c9f0f3dd54d6b58f843132962aa64c795ed8' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\MainContainer\\up.tpl',
      1 => 1557503182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd59cd3de9810_72491556 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?><b>Zalogowany/a jako: <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</b> (ID: <?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
)<br><br><?php }?>
	<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hello'>Hello</a> | 
	<?php if (!isset($_smarty_tpl->tpl_vars['l']->value)) {?><a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login'>Wejdź</a>
	<?php } else { ?><a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home'>Panel Użytkownika</a><?php }?>
</center><?php }
}
