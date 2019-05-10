<?php
/* Smarty version 3.1.33, created on 2019-04-20 21:24:33
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\amelia\app\views\HelloContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb71f1c69986_83290167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c5c4cb5f0fd3d39db2822d16b54bf67ab28055f' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\amelia\\app\\views\\HelloContainer\\up.tpl',
      1 => 1555788271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb71f1c69986_83290167 (Smarty_Internal_Template $_smarty_tpl) {
?>    My value: <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

    
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }
}
}
