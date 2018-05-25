<?php /* Smarty version Smarty-3.1.19, created on 2018-05-25 00:53:11
         compiled from "C:\xampp\htdocs\artesaniaprestashop\admin5594qd8dj\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188705b07a4c7b6a921-29161282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ea8cf8feb5e57cef4a3b34148c209eaa0c7b3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\artesaniaprestashop\\admin5594qd8dj\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1527222500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188705b07a4c7b6a921-29161282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07a4c7bd0241_55773342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07a4c7bd0241_55773342')) {function content_5b07a4c7bd0241_55773342($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo smartyTranslate(array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl);?>
");
		});
	});
</script>
<?php }} ?>
