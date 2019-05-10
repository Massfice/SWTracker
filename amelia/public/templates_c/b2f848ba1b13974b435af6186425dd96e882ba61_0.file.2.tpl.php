<?php
/* Smarty version 3.1.33, created on 2019-05-08 12:26:17
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd2aec9332ed6_10623622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f848ba1b13974b435af6186425dd96e882ba61' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\2.tpl',
      1 => 1555242683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd2aec9332ed6_10623622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4338318525cd2aec931b7d4_58561375', 1);
}
/* {block 2} */
class Block_3325668465cd2aec932f053_14081824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<br><br>	
	<?php
}
}
/* {/block 2} */
/* {block 1} */
class Block_4338318525cd2aec931b7d4_58561375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  1 => 
  array (
    0 => 'Block_4338318525cd2aec931b7d4_58561375',
  ),
  2 => 
  array (
    0 => 'Block_3325668465cd2aec932f053_14081824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<br><br>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3325668465cd2aec932f053_14081824', 2, $this->tplIndex);
?>

	<br><br>
	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[2]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		
<?php
}
}
/* {/block 1} */
}
