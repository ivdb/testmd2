<?php /* Smarty version Smarty-3.1.18, created on 2015-09-29 09:08:11
         compiled from "views\search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21724560a38b5cbcf95-11329010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6682b4ad7050a20381904e571eff70636de6d10' => 
    array (
      0 => 'views\\search_result.tpl',
      1 => 1443510490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21724560a38b5cbcf95-11329010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560a38b5db3117_68814876',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a38b5db3117_68814876')) {function content_560a38b5db3117_68814876($_smarty_tpl) {?>
<section>

<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>

	<article>

		<p> <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</p>

	</article>

<?php } ?>

</section>

<?php }} ?>
