<?php
/* Smarty version 3.1.33, created on 2019-05-13 23:40:22
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd9e446650315_73585483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd68d9998a818b5d525d1a09b5e842826522c84ba' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\2.tpl',
      1 => 1555242683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd9e446650315_73585483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9653105945cd9e446644793_32445789', 1);
}
/* {block 2} */
class Block_10476059485cd9e44664c496_78648144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 2} */
/* {block 1} */
class Block_9653105945cd9e446644793_32445789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  1 => 
  array (
    0 => 'Block_9653105945cd9e446644793_32445789',
  ),
  2 => 
  array (
    0 => 'Block_10476059485cd9e44664c496_78648144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10476059485cd9e44664c496_78648144', 2, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 1} */
}
