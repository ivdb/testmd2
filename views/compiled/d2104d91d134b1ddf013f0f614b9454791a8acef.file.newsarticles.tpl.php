<?php /* Smarty version Smarty-3.1.18, created on 2015-10-05 15:01:22
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2592855f913e67ce651-02585562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444050077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592855f913e67ce651-02585562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f913e69417d6_37481400',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f913e69417d6_37481400')) {function content_55f913e69417d6_37481400($_smarty_tpl) {?><form method="post" action="?page=search">
    <input type="text" name="search_string">
    <input type="submit" value="Go!">

</form>

<section>

<?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>

	<article>

		<h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
		<content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
	</article>

<?php } ?>

</section>

<?php }} ?>
