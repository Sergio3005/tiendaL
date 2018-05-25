<?php /* Smarty version Smarty-3.1.19, created on 2018-05-25 00:50:31
         compiled from "C:\xampp\htdocs\artesaniaprestashop\admin5594qd8dj\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304645b07a427660d81-61049604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cae6e4bdc59c135b1f021d91476124e5e8e28af7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\artesaniaprestashop\\admin5594qd8dj\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1527222500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304645b07a427660d81-61049604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07a4276a7293_79061184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07a4276a7293_79061184')) {function content_5b07a4276a7293_79061184($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
