<?php /* Smarty version Smarty-3.1.19, created on 2018-05-25 00:42:56
         compiled from "C:\xampp\htdocs\artesaniaprestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176855b07a2607a4fc9-65175200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4610071a4e7a7e2f99cdc366cc96bae2dbd88159' => 
    array (
      0 => 'C:\\xampp\\htdocs\\artesaniaprestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1527222508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176855b07a2607a4fc9-65175200',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07a2607c8251_79267111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07a2607c8251_79267111')) {function content_5b07a2607c8251_79267111($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
