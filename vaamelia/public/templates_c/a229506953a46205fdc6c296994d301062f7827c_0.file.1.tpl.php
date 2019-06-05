<?php
/* Smarty version 3.1.33, created on 2019-06-05 13:02:48
  from 'G:\Programs\x\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\core\1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf7a1588a2905_83126691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a229506953a46205fdc6c296994d301062f7827c' => 
    array (
      0 => 'G:\\Programs\\x\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\core\\1.tpl',
      1 => 1559732564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:core/2.tpl' => 1,
  ),
),false)) {
function content_5cf7a1588a2905_83126691 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['paths']->value[1])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/up.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<br><br>
<x id = '2'>
<?php $_smarty_tpl->_subTemplateRender('file:core/2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</x>
<br><br>
<?php if (isset($_smarty_tpl->tpl_vars['paths']->value[1])) {
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['paths']->value[1]).('/down.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
