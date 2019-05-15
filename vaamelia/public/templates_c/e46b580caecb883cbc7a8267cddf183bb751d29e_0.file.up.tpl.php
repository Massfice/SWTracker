<?php
/* Smarty version 3.1.33, created on 2019-05-11 01:39:45
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\SettlementContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd60bc10f9ef9_83044714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e46b580caecb883cbc7a8267cddf183bb751d29e' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\SettlementContainer\\up.tpl',
      1 => 1557531582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd60bc10f9ef9_83044714 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
authors'>Autorzy Postów</a> | 
<a href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
positions'>Pozycje Rozliczenia</a>
<br><br>

<?php if (isset($_smarty_tpl->tpl_vars['settlement_created_message']->value)) {?>
	<b><?php echo $_smarty_tpl->tpl_vars['settlement_created_message']->value;?>
</b>
<?php }?>
</center><?php }
}
