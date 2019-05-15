<?php
/* Smarty version 3.1.33, created on 2019-05-15 19:49:06
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdc5112700c32_35818727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa58bead8dad4317b21b4933be1ba1b060c5fb4a' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\0.tpl',
      1 => 1557941883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc5112700c32_35818727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<br><br>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1227022045cdc51126f8f35_65828361', 0);
?>

<br><br>
<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[0]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<input type = 'hidden' value ='<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)) {
echo $_smarty_tpl->tpl_vars['vars']->value;
}?>' id = 'data' style = 'display: inline;'><?php }
/* {block 0} */
class Block_1227022045cdc51126f8f35_65828361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  0 => 
  array (
    0 => 'Block_1227022045cdc51126f8f35_65828361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br><br>	
<?php
}
}
/* {/block 0} */
}
