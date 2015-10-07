<?php /* Smarty version Smarty-3.1.18, created on 2015-10-06 08:42:20
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1632155f7c4748d3848-21231130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444113734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1632155f7c4748d3848-21231130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f7c4748fa957_22496988',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c4748fa957_22496988')) {function content_55f7c4748fa957_22496988($_smarty_tpl) {?><header>
    <p> This is my header</p>
    <nav>
        <ul>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='news') {?> class="selected"<?php }?>><a href="?page=news">Nieuws</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='tour') {?> class="selected"<?php }?>><a href="?page=tour">Tourdata</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='about') {?> class="selected"<?php }?>><a href="?page=about">About</a></li>
        </ul>

    </nav>
</header><?php }} ?>
