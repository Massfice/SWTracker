<?php
/* Smarty version 3.1.33, created on 2019-05-16 18:18:38
  from 'G:\Programs\xampp\htdocs\myProjects\SWTracker\vaamelia\app\views\SettlementContainer\up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cdd8d5e873775_93195034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7070928365aa7f6730c2ef37640b0382cd36bf' => 
    array (
      0 => 'G:\\Programs\\xampp\\htdocs\\myProjects\\SWTracker\\vaamelia\\app\\views\\SettlementContainer\\up.tpl',
      1 => 1558023454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdd8d5e873775_93195034 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<a href = 'javascript:void(0);' onclick ='go("authors_show")'>Autorzy Postów</a> | 
<a href = 'javascript:void(0);' onclick ='go("positions_show")'>Pozycje Rozliczenia</a> 
<br><br>

<?php if (isset($_smarty_tpl->tpl_vars['settlement_created_message']->value)) {?>
	<b><?php echo $_smarty_tpl->tpl_vars['settlement_created_message']->value;?>
</b>
<?php }?>
</center><?php }
}
