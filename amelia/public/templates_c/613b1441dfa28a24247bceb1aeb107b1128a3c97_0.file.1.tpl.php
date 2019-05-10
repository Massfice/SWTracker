<?php
/* Smarty version 3.1.33, created on 2019-04-20 21:18:54
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb709ede6898_34753273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613b1441dfa28a24247bceb1aeb107b1128a3c97' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\1.tpl',
      1 => 1555242684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb709ede6898_34753273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12702439225cbb709edd3018_60780375', 0);
}
/* {block 1} */
class Block_11553380005cbb709ede2a13_98866324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 1} */
/* {block 0} */
class Block_12702439225cbb709edd3018_60780375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_12702439225cbb709edd3018_60780375',
  ),
  1 => 
  array (
    0 => 'Block_11553380005cbb709ede2a13_98866324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11553380005cbb709ede2a13_98866324', 1, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 0} */
}
