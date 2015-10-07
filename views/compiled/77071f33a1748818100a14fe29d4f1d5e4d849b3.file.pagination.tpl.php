<?php /* Smarty version Smarty-3.1.18, created on 2015-10-05 15:34:12
         compiled from "views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293715608106ca927f6-89567316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77071f33a1748818100a14fe29d4f1d5e4d849b3' => 
    array (
      0 => 'views\\pagination.tpl',
      1 => 1444052051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293715608106ca927f6-89567316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5608106cab5a75_29862211',
  'variables' => 
  array (
    'nr_of_pages' => 0,
    'curr_nr' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5608106cab5a75_29862211')) {function content_5608106cab5a75_29862211($_smarty_tpl) {?><ul id="pagination">
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nr_of_pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nr_of_pages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <li<?php if ($_smarty_tpl->tpl_vars['curr_nr']->value==$_smarty_tpl->tpl_vars['i']->value) {?> class="pag_selected"<?php }?>><a href="?page=news&page_nr=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php }} ?>
</ul>
<?php }} ?>
