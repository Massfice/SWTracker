<?php
/* Smarty version 3.1.33, created on 2019-05-16 19:32:24
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\SettlementContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd9ea8552644_34657215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7070928365aa7f6730c2ef37640b0382cd36bf' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\SettlementContainer\\up.tpl',
      1 => 1558027320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:minis/settlement_created.tpl' => 1,
  ),
),false)) {
function content_5cdd9ea8552644_34657215 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<a href = 'javascript:void(0);' onclick ='go("authors_part_show")'>Autorzy Postów</a> | 
<a href = 'javascript:void(0);' onclick ='go("positions_part_show")'>Pozycje Rozliczenia</a> 
<br><br>

<?php if (isset($_smarty_tpl->tpl_vars['settlement_created_message']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:minis/settlement_created.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</center><?php }
}
