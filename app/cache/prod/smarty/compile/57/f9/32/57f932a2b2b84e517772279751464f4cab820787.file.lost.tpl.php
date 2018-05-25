<?php /* Smarty version Smarty-3.1.19, created on 2018-05-25 00:42:56
         compiled from "C:\xampp\htdocs\artesaniaprestashop\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248315b07a2606ddc10-65543183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f932a2b2b84e517772279751464f4cab820787' => 
    array (
      0 => 'C:\\xampp\\htdocs\\artesaniaprestashop\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1527222508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248315b07a2606ddc10-65543183',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b07a2607108a7_16331277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b07a2607108a7_16331277')) {function content_5b07a2607108a7_16331277($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
