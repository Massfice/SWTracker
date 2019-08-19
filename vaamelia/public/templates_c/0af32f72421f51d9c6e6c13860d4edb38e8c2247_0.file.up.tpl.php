<?php
/* Smarty version 3.1.33, created on 2019-08-20 00:11:39
  from 'H:\xampp\htdocs\SWTracker\vaamelia\app\views\HelloContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5b1e9b9fe987_15264702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0af32f72421f51d9c6e6c13860d4edb38e8c2247' => 
    array (
      0 => 'H:\\xampp\\htdocs\\SWTracker\\vaamelia\\app\\views\\HelloContainer\\up.tpl',
      1 => 1566252466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b1e9b9fe987_15264702 (Smarty_Internal_Template $_smarty_tpl) {
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
